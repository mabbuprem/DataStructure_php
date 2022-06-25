<?php
include "SinglyLinkedList.php";

class SinglyLinkedListMain
{
    function singlyLinkedListMain()
    {
        $singlyLinkedList = new SinglylinkedList();

        $singlyLinkedList->insertAtStart(30);
        $singlyLinkedList->insertAtStart(40);
        $singlyLinkedList->insertAtStart(50);
        $singlyLinkedList->displayList();

        $singlyLinkedList->insertAtEnd(60);
        $singlyLinkedList->insertAtEnd(70);
        $singlyLinkedList->displayList();

        $singlyLinkedList->insertAtposition(2, 2);
        $singlyLinkedList->displayList();

        $singlyLinkedList->popFirst();
        $singlyLinkedList->displayList();

        $singlyLinkedList->popLast();
        $singlyLinkedList->displayList();

        $singlyLinkedList->popAtPosition(2);
        $singlyLinkedList->displayList();
    }
}

$main = new SinglyLinkedListMain();
$main->singlyLinkedListMain();
