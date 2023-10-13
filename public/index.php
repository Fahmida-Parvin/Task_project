<?php
include 'autoloader.php';
use app\Classes\DeadlineTask;
use app\Classes\TaggedDeadlineTask;

$task1 = new TaggedDeadlineTask('Task1','Should be done on Monday','12-10-23','14-10-23');

$task1->addTag('Frontend');
$task1->addTag('Contact Page');
$task1->addAssignee('Fahmida');
$task1->addAssignee('Rahat');

$task2 = new DeadlineTask('task2','should be done on sunday','14-10-23','20-10-23');
$task2->addAssignee('Hossain');

$tasks = [$task1,$task2];
foreach($tasks as $task){
    echo "Title:" . $task->getTitle(). PHP_EOL;
    echo "Description:" . $task->getDescription().PHP_EOL;
    echo "Start Date:" .$task->getStartDate().PHP_EOL;
    echo "Due Date:" .$task->getDueDate().PHP_EOL;  

if($task instanceof TaggedDeadlineTask){
    echo "Tags: " .implode(', ',$task->getTags()).PHP_EOL;
}
echo "Assignees: ".implode(', ',$task->getAssignees()).PHP_EOL;

echo "Priority: ". $task->getPriority().PHP_EOL;

echo "Completed: ".($task->isCompleted() ?'YES': 'NO').PHP_EOL;

}
