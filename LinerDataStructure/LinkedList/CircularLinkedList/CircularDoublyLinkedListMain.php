<?php

include 'CircularDoublyLinkedList.php';
class CircularDoublyLinkedListLMain
{
    function circulardoublyLinkedList()
    {
        $circulardoublyLinkedList = new CircularDoublyLinkedList();
        $circulardoublyLinkedList->insertAtLast(99);
        $circulardoublyLinkedList->insertAtLast(33);
        $circulardoublyLinkedList->insertAtLast(5);
        $circulardoublyLinkedList->insertAtLast(22);
        $circulardoublyLinkedList->printList();

        $circulardoublyLinkedList->insertAtPosition(70, 2);
        $circulardoublyLinkedList->insertAtPosition(11, 4);
        $circulardoublyLinkedList->printList();

        $circulardoublyLinkedList->insertAtLast(60);
        $circulardoublyLinkedList->printList();

        $circulardoublyLinkedList->insertAtFirst(1);
        $circulardoublyLinkedList->printList();

        $circulardoublyLinkedList->deleteKey(5);
        $circulardoublyLinkedList->printList();

        $circulardoublyLinkedList->deleteFirst();
        $circulardoublyLinkedList->printList();

        $circulardoublyLinkedList->deleteLast();
        $circulardoublyLinkedList->printList();

        $circulardoublyLinkedList->insertAtPosition(25, 3);
        $circulardoublyLinkedList->printList();

        $circulardoublyLinkedList->deleteAtPosition(4);
        $circulardoublyLinkedList->printList();
        
        $circulardoublyLinkedList->search(70);
        $circulardoublyLinkedList->printList();
    }
}
$CircularDoublyLinkedListLMain= new CircularDoublyLinkedListLMain();
$CircularDoublyLinkedListLMain->circulardoublyLinkedList();