<?php

include 'CircularSinglyLinkedList.php';
class CircularSinglyLinkedListMain
{ 
    function circularSinglyLinkedList()
    {
        $circularSinglyLinkedList = new CircularSinglyLinkedList();
        $circularSinglyLinkedList->insertAtStart(1);
        $circularSinglyLinkedList->insertAtStart(2);
        $circularSinglyLinkedList->displayList();

        $circularSinglyLinkedList->insertAtEnd(3);
        $circularSinglyLinkedList->insertAtEnd(4);
        $circularSinglyLinkedList->displayList();

        $circularSinglyLinkedList->insertAtposition(2, 2);
        $circularSinglyLinkedList->displayList();
        $circularSinglyLinkedList->popFirst();
        $circularSinglyLinkedList->displayList();

        $circularSinglyLinkedList->popLast();
        $circularSinglyLinkedList->displayList();

        $circularSinglyLinkedList->popAtPosition(2);
        $circularSinglyLinkedList->displayList();
    }
}
$circularSinglyLinkedListMain = new CircularSinglyLinkedListMain();
$circularSinglyLinkedListMain->circularSinglyLinkedList();