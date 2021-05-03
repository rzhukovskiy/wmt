<?php

/**
 */
class PostModel extends BaseModel
{
    public static $nameTable = 'post';

    public static function getById($id)
    {
        $stmt = self::$pdo->prepare("SELECT * FROM " . self::$nameTable . " WHERE id = :id");
        $stmt->execute([
            'id' => $id,
        ]);

        if ($stmt->rowCount()) {
            return new PostEntity($stmt->fetch(PDO::FETCH_ASSOC));
        } else {
            return false;
        }
    }

    /**
     * @return PostEntity[]|bool
     */
    public static function getAll()
    {
        $stmt = self::$pdo->prepare("SELECT * FROM " . self::$nameTable);
        $stmt->execute();

        if ($stmt->rowCount()) {
            $res = [];
            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                $res[$row['id']] = new PostEntity($row);
            }
            return $res;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public static function clearAll($group_id, $date)
    {
        $stmt = self::$pdo
            ->prepare("DELETE FROM " . self::$nameTable);
        return $stmt->execute();
    }
}
