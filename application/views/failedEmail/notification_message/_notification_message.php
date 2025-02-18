<?php
/**
 * View for the message of the meesage in the notification center
 * @var array $failedEmailSurveyTitles
 *
 *
 */

?>
<p>
    <?php
    eT("Dear survey administrator,<br>There were one or more notification emails that failed to be sent. Please check the 'Failed email notifications' section in the survey(s) listed below.") ?>:
</p>
<ul>
    <?php
    foreach ($failedEmailSurveyTitles as $surveyId => $surveyTitle) : ?>
        <li>
            <?= CHtml::link(
                sprintf(gT("%s (ID: %s)"), $surveyTitle, $surveyId),
                Yii::app()->createUrl("failedEmail/index/", ['surveyid' => $surveyId])
            ) ?>
        </li>
    <?php
    endforeach; ?>
</ul>