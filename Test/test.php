<?php
	if(isset($_POST['isSubmit']))
	{
        $summary = $_POST['summary'];
        $assignee = $_POST['assignee'];
        $priority = $_POST['priority'];
        $description = $_POST['description'];
        $duedate = $_POST['duedate'];
    }
?>

<?php
require '../vendor/autoload.php';

use JiraRestApi\Issue\IssueService;
use JiraRestApi\Issue\IssueField;
use JiraRestApi\JiraException;

try {
    $issueField = new IssueField();

     $issueField->setProjectKey("TEST")
                ->setSummary($summary)
                ->setDescription($description)
                ->setPriorityName($priority)
                ->setAssigneeName($assignee)
                ->setDueDate($duedate)
                ->setIssueType("Task");
	
    $issueService = new IssueService();

    $ret = $issueService->create($issueField);
	
    //If success, Returns a link to the created issue.
    var_dump($ret);
} catch (JiraException $e) {
	print("Error Occured! " . $e->getMessage());
}
?>