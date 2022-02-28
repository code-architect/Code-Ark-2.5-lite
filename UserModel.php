<?php


namespace codearchitect\codearklite;


use codearchitect\codearklite\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}