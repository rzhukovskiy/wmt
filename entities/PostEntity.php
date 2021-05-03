<?php

/**
 * @property integer    $id
 * @property integer    $created_at
 * @property string     $email
 * @property string     $text
 */
class PostEntity extends BaseEntity
{
    public function __construct($data)
    {
        parent::__construct($data);

        if (!$this->id) {
            $this->created_at = time();
        }
    }

    public function save()
    {
        $id = PostModel::save($this->data);
        $this->id = $id;
    }

    public function delete()
    {
        return PostModel::delete($this->data);
    }
}
