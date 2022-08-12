<?php

function get_contacts()
{
    $contactsJson = file_get_contents('data/contacts.json');
    $contacts = json_decode($contactsJson, true);

    return $contacts;
}

function save_contacts($contactsToSave)
{
    $json = json_encode($contactsToSave, JSON_PRETTY_PRINT);
    file_put_contents('data/contacts.json', $json);
}