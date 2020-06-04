@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="row">
            <div id="qbankContent" class="col-lg-6 col-md-12 col-sm-12 col-pad20">
                <div class="ibox float-e-margins">
                    <div class="ibox-content form-inline">
                        <h3 style="color: #65656A; font-size: 20px; padding-bottom: 10px;">How to Use</h3>
                        <!-- ngRepeat: h in howToData --><div class="question ng-scope" ng-repeat="h in howToData">
                            <p style="align: left; font-weight: 400; font-size: 16px;" class="ng-binding">
                                How do I begin using my subscription?
                            </p>
                            <div class="answer">
                                <div compiledata="" htmlcontent="<p>Once you have purchased a subscription from UWorld, it will be available for activation from your&amp;nbsp;<strong>My Account</strong>&amp;nbsp;page on our website. &amp;nbsp;You will need to sign in to your account every time you wish to access your subscription.</p>
<p>To get started using the subscription, first click on&amp;nbsp;<strong>Activate</strong>&amp;nbsp;and acknowledge the displayed Terms of Use. &amp;nbsp;You will then see the option to&amp;nbsp;<strong>Launch</strong> your subscription (<em>you may need to refresh the page if you do not immediately see the Launch option</em>). &amp;nbsp;When you click on Launch, you will be taken to the installation instructions for that subscription.</p>
<p>For STEP1 and STEP2 CK Qbank subscriptions, click on the installation instructions for&amp;nbsp;<strong>Windows</strong> or <b>Mac</b>, whichever is applicable to your system. &amp;nbsp;All other subscriptions are browser-based and accessible via the web, so you should click on&amp;nbsp;<strong>Launch</strong>.</p>
<p>When you open a new Qbank subscription, you will be presented with several different options for test creation. &amp;nbsp;Each question mode and test mode will provide a slightly different testing experience. &amp;nbsp;For new users, we recommend that you first generate tests in&amp;nbsp;<strong>Unused Question Mode</strong>. &amp;nbsp;This will ensure that you see every question in the Qbank at least once. &amp;nbsp;For more information on test creation options, please see the&amp;nbsp;<strong>&amp;quot;How can I create a test?&amp;quot; </strong>section below.&amp;nbsp;</p>
" class="ng-scope"><p class="ng-scope">Once you have purchased a subscription from UWorld, it will be available for activation from your&nbsp;<strong>My Account</strong>&nbsp;page on our website. &nbsp;You will need to sign in to your account every time you wish to access your subscription.</p>
<p class="ng-scope">To get started using the subscription, first click on&nbsp;<strong>Activate</strong>&nbsp;and acknowledge the displayed Terms of Use. &nbsp;You will then see the option to&nbsp;<strong>Launch</strong> your subscription (<em>you may need to refresh the page if you do not immediately see the Launch option</em>). &nbsp;When you click on Launch, you will be taken to the installation instructions for that subscription.</p>
<p class="ng-scope">For STEP1 and STEP2 CK Qbank subscriptions, click on the installation instructions for&nbsp;<strong>Windows</strong> or <b>Mac</b>, whichever is applicable to your system. &nbsp;All other subscriptions are browser-based and accessible via the web, so you should click on&nbsp;<strong>Launch</strong>.</p>
<p class="ng-scope">When you open a new Qbank subscription, you will be presented with several different options for test creation. &nbsp;Each question mode and test mode will provide a slightly different testing experience. &nbsp;For new users, we recommend that you first generate tests in&nbsp;<strong>Unused Question Mode</strong>. &nbsp;This will ensure that you see every question in the Qbank at least once. &nbsp;For more information on test creation options, please see the&nbsp;<strong>"How can I create a test?" </strong>section below.&nbsp;</p></div>
                            </div>
                        </div><!-- end ngRepeat: h in howToData --><div class="question ng-scope" ng-repeat="h in howToData">
                            <p style="align: left; font-weight: 400; font-size: 16px;" class="ng-binding">
                                How can I create a test?
                            </p>
                            <div class="answer">
                                <div compiledata="" htmlcontent="<p>Qbank subscriptions offer several different test creation options for maximum flexibility in your studies. &amp;nbsp;You can choose any test mode and question mode available. &amp;nbsp;You can generate as many tests as you like during your subscription&amp;#39;s active duration. &amp;nbsp;Subscribers have the option to select all available Subjects and Systems for test creation, or if you prefer, specific Subjects and Systems can be selected individually to focus on key areas.</p>
<p><strong>Test Modes</strong></p>
<ul>
    <li>
        <strong>Timed:</strong>&amp;nbsp; This option will impose a time limit for your test. &amp;nbsp;The time limit will vary depending on the subscription you have purchased. &amp;nbsp;If the time elapses before the test is completed, the test will automatically end.<br />
        &amp;nbsp;</li>
    <li>
        <strong>Untimed:</strong>&amp;nbsp; This option allows you to take the test at your own pace. &amp;nbsp;In this mode, the software displays the time elapsed, but does not impose any time limit during the test.<br />
        &amp;nbsp;</li>
    <li>
        <strong>Tutor:</strong>&amp;nbsp; This option displays the correct answer and explanation after you have answered the test question. &amp;nbsp;Once an item is answered, its explanation is retained for the duration of the test. &amp;nbsp;In this mode, the software displays the time elapsed, but does not impose any time limit on the test. &amp;nbsp;The interface will NOT show any explanation of an omitted question (ie, if you do not choose an answer and instead skip the question).<br />
        &amp;nbsp;</li>
    <li>
        <strong>Timed Tutor:</strong>&amp;nbsp; This option is similar to Tutor mode (explanation will be displayed as soon as you answer the question) except that a time limit is imposed similar to Timed test mode. &amp;nbsp;The time limit will vary depending on the number of questions selected.</li>
</ul>
<p><strong>Question Modes</strong></p>
<ul>
    <li>
        <strong>Unused:</strong>&amp;nbsp; This option will create a test containing questions that have not been used in any previous tests. &amp;nbsp;We recommend that new users begin with Unused question mode to guarantee that they see every question in the Qbank at least once.<br />
        &amp;nbsp;</li>
    <li>
        <strong>Incorrect:</strong>&amp;nbsp; This option will create a test containing only questions that were answered incorrectly from previous tests. &amp;nbsp;If you answer the question correctly in a subsequent test, it will be removed from the Incorrect question pool. &amp;nbsp;However, if it is answered incorrectly again, it will be returned to the Incorrect question pool.<br />
        &amp;nbsp;</li>
    <li>
        <strong>Marked:</strong>&amp;nbsp; This option will create a test containing only the marked questions from previous tests. &amp;nbsp;To mark a question, click the checkbox beside the red flag icon during either testing or review. &amp;nbsp;Once you make a new test containing marked questions, those questions are automatically removed from the Marked question pool (<em>unless you mark the question again in the new test</em>).<br />
        &amp;nbsp;</li>
    <li>
        <strong>All:</strong>&amp;nbsp; This option will create a test that may contain&amp;nbsp;all types of questions (<em>unused, marked and&amp;nbsp;incorrect</em>).&amp;nbsp; In this question mode, the same questions may repeat in multiple tests.&amp;nbsp; For this reason, we advise that users to do all &amp;#39;Unused&amp;#39; questions first, then &amp;#39;Incorrect&amp;#39;, &amp;#39;Marked&amp;#39;, and lastly if there&amp;#39;s still time, &amp;#39;All&amp;#39; questions mode.<br />
        &amp;nbsp;</li>
    <li>
        <strong>Custom:</strong>&amp;nbsp; This option is intended for use by study groups who intend to all create the same test or work on the same questions together using their own unique subscriptions. &amp;nbsp;Custom tests can only be generated with questions you have not yet used. &amp;nbsp;To generate a custom test for a study group, the group leader will first need to generate the test in their own subscription. &amp;nbsp;Then, they can provide the Test ID or the list of Question IDs to the other group members. &amp;nbsp;The Test ID or Question IDs can then be entered in the provided field and an identical test will be generated. &amp;nbsp;If you receive an error, this typically means that the questions have already been used in your subscription or one of the questions has been deleted/deactivated from the Qbank.</li>
</ul>
<p><strong>To generate a test:</strong></p>
<ul>
    <li>
        Select a <strong>Test Mode</strong>&amp;nbsp;[Timed, Untimed, Tutor, Timed Tutor]</li>
    <li>
        Select a <strong>Question Mode</strong>&amp;nbsp;[All, Unused, Incorrect, Marked, Custom]</li>
    <li>
        Select your preferred <strong>Subject(s)</strong>&amp;nbsp;followed by the&amp;nbsp;<strong>System(s)</strong>.&amp;nbsp; The number of available questions will vary depending on which Subject and System is selected. &amp;nbsp;If you do not have enough available questions, we recommend selecting additional Subjects/Systems or reviewing the available question count displayed in brackets [xxxx] beside the Subjects/Systems.</li>
    <li>
        Type in your preferred number of questions, keeping in mind the number [xxxx] displayed for your selected question criteria.</li>
    <li>
        For Custom question mode, provide the list of Question IDs separated by a &amp;#39;,&amp;#39; or enter the ID of a previously generated test to retrieve the question list of that test.</li>
    <li>
        Click <strong>Generate</strong>.</li>
</ul>
" class="ng-scope"><p class="ng-scope">Qbank subscriptions offer several different test creation options for maximum flexibility in your studies. &nbsp;You can choose any test mode and question mode available. &nbsp;You can generate as many tests as you like during your subscription's active duration. &nbsp;Subscribers have the option to select all available Subjects and Systems for test creation, or if you prefer, specific Subjects and Systems can be selected individually to focus on key areas.</p>
<p class="ng-scope"><strong>Test Modes</strong></p>
<ul class="ng-scope">
    <li>
        <strong>Timed:</strong>&nbsp; This option will impose a time limit for your test. &nbsp;The time limit will vary depending on the subscription you have purchased. &nbsp;If the time elapses before the test is completed, the test will automatically end.<br>
        &nbsp;</li>
    <li>
        <strong>Untimed:</strong>&nbsp; This option allows you to take the test at your own pace. &nbsp;In this mode, the software displays the time elapsed, but does not impose any time limit during the test.<br>
        &nbsp;</li>
    <li>
        <strong>Tutor:</strong>&nbsp; This option displays the correct answer and explanation after you have answered the test question. &nbsp;Once an item is answered, its explanation is retained for the duration of the test. &nbsp;In this mode, the software displays the time elapsed, but does not impose any time limit on the test. &nbsp;The interface will NOT show any explanation of an omitted question (ie, if you do not choose an answer and instead skip the question).<br>
        &nbsp;</li>
    <li>
        <strong>Timed Tutor:</strong>&nbsp; This option is similar to Tutor mode (explanation will be displayed as soon as you answer the question) except that a time limit is imposed similar to Timed test mode. &nbsp;The time limit will vary depending on the number of questions selected.</li>
</ul>
<p class="ng-scope"><strong>Question Modes</strong></p>
<ul class="ng-scope">
    <li>
        <strong>Unused:</strong>&nbsp; This option will create a test containing questions that have not been used in any previous tests. &nbsp;We recommend that new users begin with Unused question mode to guarantee that they see every question in the Qbank at least once.<br>
        &nbsp;</li>
    <li>
        <strong>Incorrect:</strong>&nbsp; This option will create a test containing only questions that were answered incorrectly from previous tests. &nbsp;If you answer the question correctly in a subsequent test, it will be removed from the Incorrect question pool. &nbsp;However, if it is answered incorrectly again, it will be returned to the Incorrect question pool.<br>
        &nbsp;</li>
    <li>
        <strong>Marked:</strong>&nbsp; This option will create a test containing only the marked questions from previous tests. &nbsp;To mark a question, click the checkbox beside the red flag icon during either testing or review. &nbsp;Once you make a new test containing marked questions, those questions are automatically removed from the Marked question pool (<em>unless you mark the question again in the new test</em>).<br>
        &nbsp;</li>
    <li>
        <strong>All:</strong>&nbsp; This option will create a test that may contain&nbsp;all types of questions (<em>unused, marked and&nbsp;incorrect</em>).&nbsp; In this question mode, the same questions may repeat in multiple tests.&nbsp; For this reason, we advise that users to do all 'Unused' questions first, then 'Incorrect', 'Marked', and lastly if there's still time, 'All' questions mode.<br>
        &nbsp;</li>
    <li>
        <strong>Custom:</strong>&nbsp; This option is intended for use by study groups who intend to all create the same test or work on the same questions together using their own unique subscriptions. &nbsp;Custom tests can only be generated with questions you have not yet used. &nbsp;To generate a custom test for a study group, the group leader will first need to generate the test in their own subscription. &nbsp;Then, they can provide the Test ID or the list of Question IDs to the other group members. &nbsp;The Test ID or Question IDs can then be entered in the provided field and an identical test will be generated. &nbsp;If you receive an error, this typically means that the questions have already been used in your subscription or one of the questions has been deleted/deactivated from the Qbank.</li>
</ul>
<p class="ng-scope"><strong>To generate a test:</strong></p>
<ul class="ng-scope">
    <li>
        Select a <strong>Test Mode</strong>&nbsp;[Timed, Untimed, Tutor, Timed Tutor]</li>
    <li>
        Select a <strong>Question Mode</strong>&nbsp;[All, Unused, Incorrect, Marked, Custom]</li>
    <li>
        Select your preferred <strong>Subject(s)</strong>&nbsp;followed by the&nbsp;<strong>System(s)</strong>.&nbsp; The number of available questions will vary depending on which Subject and System is selected. &nbsp;If you do not have enough available questions, we recommend selecting additional Subjects/Systems or reviewing the available question count displayed in brackets [xxxx] beside the Subjects/Systems.</li>
    <li>
        Type in your preferred number of questions, keeping in mind the number [xxxx] displayed for your selected question criteria.</li>
    <li>
        For Custom question mode, provide the list of Question IDs separated by a ',' or enter the ID of a previously generated test to retrieve the question list of that test.</li>
    <li>
        Click <strong>Generate</strong>.</li>
</ul></div>
                            </div>
                        </div><!-- end ngRepeat: h in howToData --><div class="question ng-scope" ng-repeat="h in howToData">
                            <p style="align: left; font-weight: 400; font-size: 16px;" class="ng-binding">
                                What features are available while taking the test?
                            </p>
                            <div class="answer">
                                <div compiledata="" htmlcontent="<p>During the test, a clock will display either the time remaining (for timed mode) or time elapsed (for untimed and tutor modes). &amp;nbsp;Navigation toolbars will be displayed on the top and bottom portion of the window. &amp;nbsp;These toolbars contain the Next, Previous, Normal Labs, Notes, Feedback, Suspend, and End buttons. A box for marking or unmarking the test question is also located in one of the navigation toolbars.</p>
<ul>
    <li>
        To view the next question, click on the <strong>Next</strong>&amp;nbsp;button.</li>
    <li>
        To view the previous question, click on the <strong>Previous</strong>&amp;nbsp;button.</li>
    <li>
        To view the normal laboratory values, click on the <strong>Normal Labs</strong>&amp;nbsp;button.</li>
    <li>
        To type in notes during the test, clicking on the <strong>Notes</strong>&amp;nbsp;button. &amp;nbsp;These notes can later be compiled and printed for convenient study.</li>
    <li>
        To provide feedback for a particular question, click&amp;nbsp;on the <strong>Feedback</strong>&amp;nbsp;button while viewing the question for which you need to provide feedback.</li>
    <li>
        To mark/unmark a question, click on the checkbox next to the&amp;nbsp;<strong>red flag icon</strong>.</li>
    <li>
        To pause the test at any time, click on the <strong>Suspend</strong>&amp;nbsp;button. &amp;nbsp;Your answers will be saved and stored. &amp;nbsp;You may resume taking the test at a later date and time.</li>
    <li>
        To end the test at any time, clicking on the <strong>End</strong>&amp;nbsp;button. &amp;nbsp;The exam will be scored as soon as it is ended.</li>
</ul>
<p>Another navigation toolbar is displayed on the left side of the window. This toolbar contains the item number of each question.</p>
<ul>
    <li>
        To directly view or answer a particular test question, click on the item number from the left navigation toolbar. This function is particularly useful during test reviews.</li>
    <li>
        You can view the next question without answering the current question. &amp;nbsp;Once you have answered the last question of the test, you will be prompted to either end the test or review your answers.</li>
</ul>
<p>A summary of your test results will be displayed once the test has been ended.</p>
<ul>
    <li>
        A green check mark indicates that the question is Correct</li>
    <li>
        A red X indicates that the question is Incorrect</li>
    <li>
        A blue exclamation point (!) indicates that the question was Omitted (skipped without answering)</li>
</ul>
" class="ng-scope"><p class="ng-scope">During the test, a clock will display either the time remaining (for timed mode) or time elapsed (for untimed and tutor modes). &nbsp;Navigation toolbars will be displayed on the top and bottom portion of the window. &nbsp;These toolbars contain the Next, Previous, Normal Labs, Notes, Feedback, Suspend, and End buttons. A box for marking or unmarking the test question is also located in one of the navigation toolbars.</p>
<ul class="ng-scope">
    <li>
        To view the next question, click on the <strong>Next</strong>&nbsp;button.</li>
    <li>
        To view the previous question, click on the <strong>Previous</strong>&nbsp;button.</li>
    <li>
        To view the normal laboratory values, click on the <strong>Normal Labs</strong>&nbsp;button.</li>
    <li>
        To type in notes during the test, clicking on the <strong>Notes</strong>&nbsp;button. &nbsp;These notes can later be compiled and printed for convenient study.</li>
    <li>
        To provide feedback for a particular question, click&nbsp;on the <strong>Feedback</strong>&nbsp;button while viewing the question for which you need to provide feedback.</li>
    <li>
        To mark/unmark a question, click on the checkbox next to the&nbsp;<strong>red flag icon</strong>.</li>
    <li>
        To pause the test at any time, click on the <strong>Suspend</strong>&nbsp;button. &nbsp;Your answers will be saved and stored. &nbsp;You may resume taking the test at a later date and time.</li>
    <li>
        To end the test at any time, clicking on the <strong>End</strong>&nbsp;button. &nbsp;The exam will be scored as soon as it is ended.</li>
</ul>
<p class="ng-scope">Another navigation toolbar is displayed on the left side of the window. This toolbar contains the item number of each question.</p>
<ul class="ng-scope">
    <li>
        To directly view or answer a particular test question, click on the item number from the left navigation toolbar. This function is particularly useful during test reviews.</li>
    <li>
        You can view the next question without answering the current question. &nbsp;Once you have answered the last question of the test, you will be prompted to either end the test or review your answers.</li>
</ul>
<p class="ng-scope">A summary of your test results will be displayed once the test has been ended.</p>
<ul class="ng-scope">
    <li>
        A green check mark indicates that the question is Correct</li>
    <li>
        A red X indicates that the question is Incorrect</li>
    <li>
        A blue exclamation point (!) indicates that the question was Omitted (skipped without answering)</li>
</ul></div>
                            </div>
                        </div><!-- end ngRepeat: h in howToData --><div class="question ng-scope" ng-repeat="h in howToData">
                            <p style="align: left; font-weight: 400; font-size: 16px;" class="ng-binding">
                                How can I view test results?
                            </p>
                            <div class="answer">
                                <div compiledata="" htmlcontent="<p>Once you complete a test, a summary of the completed test will automatically display when the test block is ended. &amp;nbsp;This summary will show which questions were answered correctly, incorrectly or omitted. &amp;nbsp;It will also display the <strong>Avg. Score</strong>, which is calculated by averaging together the % of correct response for each question contained in the test block, and&amp;nbsp;<strong>Your Score</strong>, which is the percentage of questions you answered correctly. &amp;nbsp;If you wish to review individual test questions, click on&amp;nbsp;<strong>Explanation&amp;nbsp;</strong>beside the question you wish to review.</p>
<p>If you would like to go back and review an older test, go to the&amp;nbsp;<strong>Previous Test</strong> section and select&amp;nbsp;<strong>Review</strong>&amp;nbsp;beside the test you wish to look at. &amp;nbsp;You can also select&amp;nbsp;<strong>Resume</strong>&amp;nbsp;on any test you may have ended accidentally to correct your answers.</p>
<p>For a detailed view of your performance, click on&amp;nbsp;<strong>Analysis</strong>. &amp;nbsp;The correct, incorrect, and omitted questions will be presented graphically. &amp;nbsp;If the test contained questions from all disciplines, then your performance for each discipline will be displayed.</p>
" class="ng-scope"><p class="ng-scope">Once you complete a test, a summary of the completed test will automatically display when the test block is ended. &nbsp;This summary will show which questions were answered correctly, incorrectly or omitted. &nbsp;It will also display the <strong>Avg. Score</strong>, which is calculated by averaging together the % of correct response for each question contained in the test block, and&nbsp;<strong>Your Score</strong>, which is the percentage of questions you answered correctly. &nbsp;If you wish to review individual test questions, click on&nbsp;<strong>Explanation&nbsp;</strong>beside the question you wish to review.</p>
<p class="ng-scope">If you would like to go back and review an older test, go to the&nbsp;<strong>Previous Test</strong> section and select&nbsp;<strong>Review</strong>&nbsp;beside the test you wish to look at. &nbsp;You can also select&nbsp;<strong>Resume</strong>&nbsp;on any test you may have ended accidentally to correct your answers.</p>
<p class="ng-scope">For a detailed view of your performance, click on&nbsp;<strong>Analysis</strong>. &nbsp;The correct, incorrect, and omitted questions will be presented graphically. &nbsp;If the test contained questions from all disciplines, then your performance for each discipline will be displayed.</p></div>
                            </div>
                        </div><!-- end ngRepeat: h in howToData --><div class="question ng-scope" ng-repeat="h in howToData">
                            <p style="align: left; font-weight: 400; font-size: 16px;" class="ng-binding">
                                How do I interpret my scores/performance?
                            </p>
                            <div class="answer">
                                <div compiledata="" htmlcontent="<p>The&amp;nbsp;<strong>Performance</strong>&amp;nbsp;section of the Qbank displays your aggregate performance over the entire term of your subscription. &amp;nbsp;It is separated into two sections,&amp;nbsp;<strong>Reports</strong> and&amp;nbsp;<strong>Graphs</strong>.</p>
<p><strong>Reports&amp;nbsp;</strong>displays your Qbank scoring in several different ways<b>.</b></p>
<ul>
    <li>
        <strong>Overall Performance: &amp;nbsp;</strong>The pie graph at the top of this section displays the total number of questions you have answered correctly, incorrectly, or omitted (skipped without answering) during the term of your subscription.&amp;nbsp; To the right of the pie graph is the count and percentage of your Total Correct, Total Incorrect, and Total Ommitted questions. &amp;nbsp;This section counts every instance of a question being answered, even repeated questions.</li>
    <li>
        <strong>Percentile Rank:</strong>&amp;nbsp; The bell curve in this section compares your performance in the Qbank to the performance of other active users. &amp;nbsp;The&amp;nbsp;<strong>Median Score</strong> is depicted by the red line, and&amp;nbsp;<strong>Your Score</strong>&amp;nbsp;is depicted by the green line. &amp;nbsp;The percentile is the percentage of users which have scored below the line (<em>ie, if the Median Score is the 48th percentile, this indicates that the average user is performing better than 48% of other users</em>).</li>
    <li>
        <strong>Subjects &amp;amp; Systems: &amp;nbsp;</strong>The bar charts in this section further break down your score by subject. &amp;nbsp;Each bar visually represents the percentage of correct answers (green), incorrect answers (red), and ommitted questions (blue). &amp;nbsp;It additionally assigns a percentile rank to your performance in that subject/system.</li>
</ul>
<p><strong>Graphs</strong>&amp;nbsp;displays a graphical representation of your aggregate performance.</p>
<ul>
    <li>
        <strong>Performance by Test:&amp;nbsp;</strong>&amp;nbsp;This line graph displays Your Score&amp;nbsp;(green), the Average Score (grey) and your overall Cumulative Performance (orange) from the first test you created to the most recent test.</li>
    <li>
        <strong>Performance by Date: &amp;nbsp;</strong>This line graph displays the same information depicted in the Performance by Test section, ordered by the date each test was accessed.</li>
</ul>
<p>Both sub-sections of the Performance section may be printed by clicking the&amp;nbsp;<strong>Printer icon</strong> in the top right corner of the page.</p>
" class="ng-scope"><p class="ng-scope">The&nbsp;<strong>Performance</strong>&nbsp;section of the Qbank displays your aggregate performance over the entire term of your subscription. &nbsp;It is separated into two sections,&nbsp;<strong>Reports</strong> and&nbsp;<strong>Graphs</strong>.</p>
<p class="ng-scope"><strong>Reports&nbsp;</strong>displays your Qbank scoring in several different ways<b>.</b></p>
<ul class="ng-scope">
    <li>
        <strong>Overall Performance: &nbsp;</strong>The pie graph at the top of this section displays the total number of questions you have answered correctly, incorrectly, or omitted (skipped without answering) during the term of your subscription.&nbsp; To the right of the pie graph is the count and percentage of your Total Correct, Total Incorrect, and Total Ommitted questions. &nbsp;This section counts every instance of a question being answered, even repeated questions.</li>
    <li>
        <strong>Percentile Rank:</strong>&nbsp; The bell curve in this section compares your performance in the Qbank to the performance of other active users. &nbsp;The&nbsp;<strong>Median Score</strong> is depicted by the red line, and&nbsp;<strong>Your Score</strong>&nbsp;is depicted by the green line. &nbsp;The percentile is the percentage of users which have scored below the line (<em>ie, if the Median Score is the 48th percentile, this indicates that the average user is performing better than 48% of other users</em>).</li>
    <li>
        <strong>Subjects &amp; Systems: &nbsp;</strong>The bar charts in this section further break down your score by subject. &nbsp;Each bar visually represents the percentage of correct answers (green), incorrect answers (red), and ommitted questions (blue). &nbsp;It additionally assigns a percentile rank to your performance in that subject/system.</li>
</ul>
<p class="ng-scope"><strong>Graphs</strong>&nbsp;displays a graphical representation of your aggregate performance.</p>
<ul class="ng-scope">
    <li>
        <strong>Performance by Test:&nbsp;</strong>&nbsp;This line graph displays Your Score&nbsp;(green), the Average Score (grey) and your overall Cumulative Performance (orange) from the first test you created to the most recent test.</li>
    <li>
        <strong>Performance by Date: &nbsp;</strong>This line graph displays the same information depicted in the Performance by Test section, ordered by the date each test was accessed.</li>
</ul>
<p class="ng-scope">Both sub-sections of the Performance section may be printed by clicking the&nbsp;<strong>Printer icon</strong> in the top right corner of the page.</p></div>
                            </div>
                        </div><!-- end ngRepeat: h in howToData -->
                    </div>
                </div>
            </div>

            <div id="qbankFaq" class="col-lg-6 col-md-12 col-sm-12 col-pad20">
                <div class="ibox float-e-margins">
                    <div class="ibox-content form-inline">
                        <h3 style="color: #65656A; font-size: 20px; padding-bottom: 10px;">FAQs</h3>
                        <!-- ngRepeat: h in faqData --><div class="question dropdown ng-scope" ng-repeat="h in faqData">
                            <p style="align: left; font-weight: 400; font-size: 16px;" class="ng-binding">
                                I want to reset/delete my qbank test history (or) start all over again. Is this possible?
                            </p>
                            <div class="answer">
                                <div compiledata="" htmlcontent="<p><strong>CPA Review:</strong>&amp;nbsp; No resets are available for the CPA Review.</p>
<p><strong>All Other Qbanks:</strong>&amp;nbsp; We offer a one-time reset option with subscriptions that have been active continuously for 180 days or more.&amp;nbsp; Once a reset has been used, a subscription <em>cannot</em> be reset again, regardless of the duration remaining on the subscription or purchase of additional renewals.</p>
" class="ng-scope"><p class="ng-scope"><strong>CPA Review:</strong>&nbsp; No resets are available for the CPA Review.</p>
<p class="ng-scope"><strong>All Other Qbanks:</strong>&nbsp; We offer a one-time reset option with subscriptions that have been active continuously for 180 days or more.&nbsp; Once a reset has been used, a subscription <em>cannot</em> be reset again, regardless of the duration remaining on the subscription or purchase of additional renewals.</p></div>
                            </div>
                        </div><!-- end ngRepeat: h in faqData --><div class="question dropdown ng-scope" ng-repeat="h in faqData">
                            <p style="align: left; font-weight: 400; font-size: 16px;" class="ng-binding">
                                Can I access my subscriptions on a mobile device?
                            </p>
                            <div class="answer">
                                <div compiledata="" htmlcontent="<p>Access to Qbank subscriptions is offered through our companion application for Android, iOS, and Kindle devices.&amp;nbsp; The companion app is provided as a courtesy for convenient access on the go and is not intended to replace primary access from a laptop or desktop system.&amp;nbsp; Refunds or other compensation will not be provided due to inability to access the subscription from a mobile device.&amp;nbsp; Only Qbank and Self-Assessment exam subscriptions are accessible via mobile devices.&amp;nbsp; Please verify that your mobile device meets our <a href=&quot;http://www.uworld.com/system_requirements.aspx&quot; target=&quot;_blank&quot;>System Requirements</a>.</p>  <div style=&quot;max-width:750px; margin:0 auto;&quot;>   <div style=&quot;width:33%; float:left; text-align:center;&quot;>    <h3>     iOS App</h3>    <p><a href=&quot;https://itunes.apple.com/us/app/uworld-usmle/id991621303&quot; target=&quot;_blank&quot;>USMLE</a></p>    <p><a href=&quot;https://itunes.apple.com/us/app/boards-abim-abfm/id984706854&quot; target=&quot;_blank&quot;>Boards</a></p>    <p><a href=&quot;https://itunes.apple.com/us/app/uworld-nclex/id979446488&quot; target=&quot;_blank&quot;>NCLEX</a></p>    <p><a href=&quot;https://itunes.apple.com/us/app/uworld-mcat/id1248501386?mt=8&quot; target=&quot;_blank&quot;>MCAT</a></p>    <p><a href=&quot;https://itunes.apple.com/us/app/uworld-sat/id1219538225?mt=8&quot; target=&quot;_blank&quot;>SAT / ACT</a></p>    <p><a href=&quot;https://itunes.apple.com/us/app/uworld-cpa/id1466996180?mt=8&quot; target=&quot;_blank&quot;>CPA Review</a></p>   </div>   <div style=&quot;width:33%; float:left; text-align:center;&quot;>    <h3>     Android App</h3>    <p><a href=&quot;https://play.google.com/store/apps/details?id=com.usmleworld&quot; target=&quot;_blank&quot;>USMLE</a></p>    <p><a href=&quot;https://play.google.com/store/apps/details?id=com.uworld.boards&quot; target=&quot;_blank&quot;>Boards</a></p>    <p><a href=&quot;https://play.google.com/store/apps/details?id=com.uworld.nclex&quot; target=&quot;_blank&quot;>NCLEX</a></p>    <p><a href=&quot;https://play.google.com/store/apps/details?id=com.uworld.mcat&quot; target=&quot;_blank&quot;>MCAT</a></p>    <p><a href=&quot;https://play.google.com/store/apps/details?id=com.uworld.collegeprep&quot; target=&quot;_blank&quot;>SAT / ACT</a></p>    <p><a href=&quot;https://play.google.com/store/apps/details?id=com.uworld.cpa&quot; target=&quot;_blank&quot;>CPA Review</a></p>   </div>   <div style=&quot;width:33%; float:left; text-align:center;&quot;>    <h3>     Kindle App</h3>    <p><a href=&quot;https://www.amazon.com/USMLEWorld-LLC-QBank/dp/B008CG1YEK/&quot; target=&quot;_blank&quot;>USMLE</a></p>    <p><a href=&quot;https://www.amazon.com/gp/mas/dl/android?asin=B00W2D7KS8&quot; target=&quot;_blank&quot;>Boards</a></p>    <p><a href=&quot;https://www.amazon.com/gp/mas/dl/android?asin=B00VGYHCFU&quot; target=&quot;_blank&quot;>NCLEX</a></p>    <p><a href=&quot;https://www.amazon.com/UWorld-LLC-MCAT/dp/B07349542G/ref=sr_1_5?s=mobile-apps&amp;amp;ie=UTF8&amp;amp;qid=1533829464&amp;amp;sr=1-5&quot; target=&quot;_blank&quot;>MCAT</a></p>    <p><a href=&quot;https://www.amazon.com/gp/mas/dl/android?p=com.uworld.collegeprep&quot; target=&quot;_blank&quot;>SAT / ACT</a></p>    <p><a href=&quot;https://www.amazon.com/dp/B07TKNQKM7&quot; target=&quot;_blank&quot;>CPA Review</a></p>   </div>  </div>  <p style=&quot;clear:both;&quot;><strong>Other mobile device(s):</strong>&amp;nbsp; Our developers are aware of request for mobile access on other devices/platforms and are reviewing potential options and implementation scenarios.&amp;nbsp; However, an exact time frame (or if/when a solution will be available) is unknown.&amp;nbsp; Once an app is ready, it will be announced directly on our website.</p>  " class="ng-scope"><p class="ng-scope">Access to Qbank subscriptions is offered through our companion application for Android, iOS, and Kindle devices.&nbsp; The companion app is provided as a courtesy for convenient access on the go and is not intended to replace primary access from a laptop or desktop system.&nbsp; Refunds or other compensation will not be provided due to inability to access the subscription from a mobile device.&nbsp; Only Qbank and Self-Assessment exam subscriptions are accessible via mobile devices.&nbsp; Please verify that your mobile device meets our <a href="http://www.uworld.com/system_requirements.aspx" target="_blank">System Requirements</a>.</p>  <div style="max-width:750px; margin:0 auto;" class="ng-scope">   <div style="width:33%; float:left; text-align:center;">    <h3>     iOS App</h3>    <p><a href="https://itunes.apple.com/us/app/uworld-usmle/id991621303" target="_blank">USMLE</a></p>    <p><a href="https://itunes.apple.com/us/app/boards-abim-abfm/id984706854" target="_blank">Boards</a></p>    <p><a href="https://itunes.apple.com/us/app/uworld-nclex/id979446488" target="_blank">NCLEX</a></p>    <p><a href="https://itunes.apple.com/us/app/uworld-mcat/id1248501386?mt=8" target="_blank">MCAT</a></p>    <p><a href="https://itunes.apple.com/us/app/uworld-sat/id1219538225?mt=8" target="_blank">SAT / ACT</a></p>    <p><a href="https://itunes.apple.com/us/app/uworld-cpa/id1466996180?mt=8" target="_blank">CPA Review</a></p>   </div>   <div style="width:33%; float:left; text-align:center;">    <h3>     Android App</h3>    <p><a href="https://play.google.com/store/apps/details?id=com.usmleworld" target="_blank">USMLE</a></p>    <p><a href="https://play.google.com/store/apps/details?id=com.uworld.boards" target="_blank">Boards</a></p>    <p><a href="https://play.google.com/store/apps/details?id=com.uworld.nclex" target="_blank">NCLEX</a></p>    <p><a href="https://play.google.com/store/apps/details?id=com.uworld.mcat" target="_blank">MCAT</a></p>    <p><a href="https://play.google.com/store/apps/details?id=com.uworld.collegeprep" target="_blank">SAT / ACT</a></p>    <p><a href="https://play.google.com/store/apps/details?id=com.uworld.cpa" target="_blank">CPA Review</a></p>   </div>   <div style="width:33%; float:left; text-align:center;">    <h3>     Kindle App</h3>    <p><a href="https://www.amazon.com/USMLEWorld-LLC-QBank/dp/B008CG1YEK/" target="_blank">USMLE</a></p>    <p><a href="https://www.amazon.com/gp/mas/dl/android?asin=B00W2D7KS8" target="_blank">Boards</a></p>    <p><a href="https://www.amazon.com/gp/mas/dl/android?asin=B00VGYHCFU" target="_blank">NCLEX</a></p>    <p><a href="https://www.amazon.com/UWorld-LLC-MCAT/dp/B07349542G/ref=sr_1_5?s=mobile-apps&amp;ie=UTF8&amp;qid=1533829464&amp;sr=1-5" target="_blank">MCAT</a></p>    <p><a href="https://www.amazon.com/gp/mas/dl/android?p=com.uworld.collegeprep" target="_blank">SAT / ACT</a></p>    <p><a href="https://www.amazon.com/dp/B07TKNQKM7" target="_blank">CPA Review</a></p>   </div>  </div>  <p style="clear:both;" class="ng-scope"><strong>Other mobile device(s):</strong>&nbsp; Our developers are aware of request for mobile access on other devices/platforms and are reviewing potential options and implementation scenarios.&nbsp; However, an exact time frame (or if/when a solution will be available) is unknown.&nbsp; Once an app is ready, it will be announced directly on our website.</p></div>
                            </div>
                        </div><!-- end ngRepeat: h in faqData --><div class="question dropdown ng-scope" ng-repeat="h in faqData">
                            <p style="align: left; font-weight: 400; font-size: 16px;" class="ng-binding">
                                How do I reuse questions with no reset option available (to avoid repetition)?
                            </p>
                            <div class="answer">
                                <div compiledata="" htmlcontent="<p>If you want to redo certain questions and ensure that you do not have duplicate questions in subsequently generated test blocks, we recommend that you use the &amp;#39;Marked&amp;#39; question mode.</p>
<p>Once a test is generated via the &amp;#39;Marked&amp;#39; question mode, all questions within that test are no longer marked.&amp;nbsp; Therefore, you could work through the Qbank or select individual subjects a second time according to your preference.</p>
<p>To mark a question, click the checkbox beside the red flag icon during testing or review (<em>on mobile devices, tap the red flag icon to mark the question</em>).&amp;nbsp; Once you have your questions marked, you can then generate new tests using the &amp;#39;Marked&amp;#39; question mode.</p>
<p>If you would like to generate the same questions in a new test a third/fourth/etc. time, you will need to &amp;#39;mark&amp;#39; these questions again (as each time a test is generated via the &amp;#39;marked&amp;#39; option, the questions are removed from the &amp;#39;marked&amp;#39; pool).</p>
" class="ng-scope"><p class="ng-scope">If you want to redo certain questions and ensure that you do not have duplicate questions in subsequently generated test blocks, we recommend that you use the 'Marked' question mode.</p>
<p class="ng-scope">Once a test is generated via the 'Marked' question mode, all questions within that test are no longer marked.&nbsp; Therefore, you could work through the Qbank or select individual subjects a second time according to your preference.</p>
<p class="ng-scope">To mark a question, click the checkbox beside the red flag icon during testing or review (<em>on mobile devices, tap the red flag icon to mark the question</em>).&nbsp; Once you have your questions marked, you can then generate new tests using the 'Marked' question mode.</p>
<p class="ng-scope">If you would like to generate the same questions in a new test a third/fourth/etc. time, you will need to 'mark' these questions again (as each time a test is generated via the 'marked' option, the questions are removed from the 'marked' pool).</p></div>
                            </div>
                        </div><!-- end ngRepeat: h in faqData --><div class="question dropdown ng-scope" ng-repeat="h in faqData">
                            <p style="align: left; font-weight: 400; font-size: 16px;" class="ng-binding">
                                Why are images/media in questions not loading?
                            </p>
                            <div class="answer">
                                <div compiledata="" htmlcontent="<p>This problem might arise if you lose your internet connection while course content is being downloaded onto your computer.&amp;nbsp; The test is downloaded on your machine while the images and media are stored on the server.&amp;nbsp; Therefore, you may be able to move from one question to the next in absence of internet connection, but the images and media will not load.&amp;nbsp; This is especially true if you are using a wireless (3G/GPRS/GSM/UMTS/CDMA/HSDPA/WiMAX/Wi-Fi) or dial-up connection.</p>
<p>If you rely on dial-up access, we recommend trying to access the course from a high-speed internet access point if possible. If you rely on wireless access, please disable the wireless device on your computer and try using a wired connection from your computer to your internet access point to avoid this issue. If the problem exists on a wired connection, then email us your username, contact number, and a suitable time to reach you by telephone. We will check if the connection is working properly.</p>
<p>Our qbank requires reliable and stable connection in order to download images and save tests while communicating with our servers. Wireless connections are great in terms of offering flexibility with connection but are quite unreliable when providing sustained and reliable internet connectivity.</p>
" class="ng-scope"><p class="ng-scope">This problem might arise if you lose your internet connection while course content is being downloaded onto your computer.&nbsp; The test is downloaded on your machine while the images and media are stored on the server.&nbsp; Therefore, you may be able to move from one question to the next in absence of internet connection, but the images and media will not load.&nbsp; This is especially true if you are using a wireless (3G/GPRS/GSM/UMTS/CDMA/HSDPA/WiMAX/Wi-Fi) or dial-up connection.</p>
<p class="ng-scope">If you rely on dial-up access, we recommend trying to access the course from a high-speed internet access point if possible. If you rely on wireless access, please disable the wireless device on your computer and try using a wired connection from your computer to your internet access point to avoid this issue. If the problem exists on a wired connection, then email us your username, contact number, and a suitable time to reach you by telephone. We will check if the connection is working properly.</p>
<p class="ng-scope">Our qbank requires reliable and stable connection in order to download images and save tests while communicating with our servers. Wireless connections are great in terms of offering flexibility with connection but are quite unreliable when providing sustained and reliable internet connectivity.</p></div>
                            </div>
                        </div><!-- end ngRepeat: h in faqData --><div class="question dropdown ng-scope" ng-repeat="h in faqData">
                            <p style="align: left; font-weight: 400; font-size: 16px;" class="ng-binding">
                                How can I delete a test block?
                            </p>
                            <div class="answer">
                                <div compiledata="" htmlcontent="<p>Tests cannot be deleted once they have been generated.&amp;nbsp; If you have accidentally ended a test block and caused questions to be marked as omitted, you can continue the test by going to the <strong>Previous Tests</strong> section and clicking <strong>Resume</strong> adjacent to the test in question.</p>
<p>If you have made a mistake when selecting the Test Mode, Question Mode, or number of questions, this cannot be changed.&amp;nbsp; If you would like to recreate the test in your desired mode to retake the questions, we recommend that you <strong>mark</strong> all questions in the test and then generate a new test using the <strong>Marked</strong> question mode.</p>
" class="ng-scope"><p class="ng-scope">Tests cannot be deleted once they have been generated.&nbsp; If you have accidentally ended a test block and caused questions to be marked as omitted, you can continue the test by going to the <strong>Previous Tests</strong> section and clicking <strong>Resume</strong> adjacent to the test in question.</p>
<p class="ng-scope">If you have made a mistake when selecting the Test Mode, Question Mode, or number of questions, this cannot be changed.&nbsp; If you would like to recreate the test in your desired mode to retake the questions, we recommend that you <strong>mark</strong> all questions in the test and then generate a new test using the <strong>Marked</strong> question mode.</p></div>
                            </div>
                        </div><!-- end ngRepeat: h in faqData -->
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- /.content-wrapper -->
@endsection
