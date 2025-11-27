<?php
require_once "../model/baseModel.php";

class Contact extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = "contact_messages";
    }

    public function saveMessage(array $data): bool
    {
        return $this->insert($data);
    }
}
