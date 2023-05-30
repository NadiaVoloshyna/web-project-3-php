<?php
    require_once 'header.php';

    require_once 'login.php';
    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    $table = "article3";
    $action = "article3.php";

    echo <<<_ARTICLE
        <section class="section">
            <article class="article">
                <h3>IBM ponders AI impact before hiring</h3>
                <p>
                    IBM will wait and see which jobs can be replaced by artificial intelligence before hiring for more back-office roles. Roughly 7,800 jobs in departments such 
                    as human resources could be done with AI and automation, CEO Arvind Krishna says. The century-old company, which has about 260,000 employees, continues to hire 
                    for customer-facing roles and software development. Still, Krishna's announcement is one of the most sweeping by a major corporation on the impact of the new 
                    technology on its workforce.
                </p>
                <hr>
                <h4>IBM's strategy to turn to AI is a good workforce strategy</h4>
                <div class="float">
                    <div id="lefty">
                        <p>
                            Krishna's comments on AI replacing humans come just months after the company said it would cut 3,900 jobs or 1.5% of its workforce. However, analysts believe 
                            it is high time mundane tasks are replaced with AI.
                        </p>
                        <p>
                            “If IBM is pausing 7,800 jobs that AI could do, it would be a good move for the company, as I wouldn't think it was a good strategy to hire positions that 
                            could have been easily done by AI and automation in the first place,” said Lily Phan, research director at IDC.
                        </p>
                        <p>
                            In March, IBM spin-off and managed IT services provider Kyndryl said it was “eliminating” a small percentage of global roles in search of efficiency. 
                            The layoffs at Kyndryl were followed by job cuts at another IBM-owned firm, RedHat.
                        </p>
                        <p>
                            Large technology companies such as IBM have continued to reduce their headcount in search of efficiency and cost reduction in the wake of reducing revenue after 
                            they went on a hiring binge during the pandemic when lockdowns sparked a tech buying spree to support remote work and an uptick in e-commerce.
                        </p>
                        <p>
                            Jain cautioned that the IBM CEO's comments were more of a hope than a plan.
                        </p>
                        <p>
                            “This is just an approximation and extrapolation of current trends for the next five years. The actual numbers might not be that much or might take longer than 
                            five years. We don't know what challenges will come up in scaling these early pilots around AI or AI implementation,” Jain said. “What Arvind has said is that 
                            he expects a 30% reduction in the next five years in the HR department headcount because of AI. At this point, I think it is a hope, not a plan.”
                        </p>
                    </div>
                    <img src="images/robot.jpg" alt="supercomputer">
                </div>
                <h4>Mundane tasks will see automation</h4>
                <p>
                    Giving examples of roles that are likely to be impacted in the next five years, Krishna said that mundane tasks such as employee verification or moving employees 
                    from one department to the other will be fully automated while other tasks such as measuring productivity would stay relevant for the next decade.
                </p>
                <p>
                    The roles that are likely to be impacted globally, according to analysts, don't require human intelligence at all.
                </p>
                <p>
                    “What Arvind is talking about are the routine jobs that don't require analysis and judgment and only require accessing information, transactions, and updating. 
                    These jobs are at risk as there is not much concern about bias or hallucinations,” Jain said.
                </p>
                <p>
                    “In fact, AI and automation have been impacting routine jobs slowly for quite some time like we see <abbr title="interactive voice response">IVR</abbr> or 
                    chatbot in customer support for information access and complaints. What generative AI has done is accelerated this development.”
                </p>
                <p>
                    Some analysts are more optimistic than others when it comes to the impact of AI on jobs. The scare of losing jobs to AI, according to IDC's Phan, could be 
                    compared with the time when robots came to the fore.
                </p>
                <p>
                    “The same fears that robots would take up people's jobs happened a few years ago, but in fact, we are having more jobs today than before. AI's replacement 
                    of jobs would help to do mundane and manual tasks and leave more bespoke/customized tasks to employees that require human skills, relationships, connections, 
                    and emotional quotient,” Phan said.
                </p>
                <p>
                    Not all jobs will not be taken over by AI and its proliferation will see the creation of highly skilled jobs, added Deepika Giri, IDC's head of AI research.
                </p>
                <p>
                    “Although the looming anxiety around job losses is prevalent, it only will push the workforce to be re-aligned and trained with more relevant skill sets.”
                </p>
                <figure id="figure">
                    <img src="images/ibm_logo.jpg" alt="ibm_logo">
                    <figcaption id="figcaption">The IBM logo in front of an AI-generated background.</figcaption>
                </figure>
                            </article>
    _ARTICLE;

    require_once 'comments.php';
    
    require_once 'footer.php';

?>