<?php
    require_once 'header.php';

    require_once 'login.php';
    try {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
    catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    $table = "article2";
    $action = "article2.php";

    echo <<<_ARTICLE
        <section class="section">
            <article class="article">
                <h3>IBM joins AI fray with Watsonx</h3>
                <p>
                    More than a decade after debuting Watson — a literal question-answering machine designed to beat humans at “Jeopardy” — IBM is renewing 
                    its push into artificial intelligence. The company has brought back the brand in the form of Watsonx, a platform that aims to help companies 
                    create and integrate custom AI capabilities into their operations. CEO Arvind Krishna says the new data and AI platform could replace between 30% 
                    and 50% of “repetitive, back-office processes” in coming years and has repeatedly emphasized its accuracy compared with rival AI products.
                </p>
                <hr>
                <h4>IBM Unveils the Watsonx Platform to Power Next-Generation Foundation Models for Business</h4>
                <div class="float">
                    <pre id="left">
        &#9864 Watsonx is a new platform to be released for foundation models and generative AI, offering a studio, data 
          store, and governance toolkit
        &#9864 New Watson products infused with foundation models and generative AI to be launched for code, AIOps, 
          digital labor, security, and sustainability
        &#9864 New collaboration with Hugging Face will work to bring the best of open-source AI models to the enterprise 
          on the watsonx platform
        &#9864 IBM Consulting announces a Center of Excellence for generative AI with over 1000 AI experts ready to 
          implement clients' business transformation with enterprise-grade AI
                    </pre>
                    <img class="right" src="images/watsonx_ai.png" alt="watson_ai">
                    <img class="right" src="images/watsonx_data.png" alt="watson_data">
                    <img class="right" src="images/watsonx_gov.png" alt="watson_gov">
                </div>
                <p>
                    ARMONK, N.Y., May 9, 2023 -- Today, IBM (NYSE: IBM) at its annual Think conference, announced IBM watsonx, a new AI and data platform to be released that 
                    will enable enterprises to scale and accelerate the impact of the most advanced AI with trusted data. Enterprises turning to AI today need access to a full 
                    technology stack that enables them to train, tune and deploy AI models, including foundation models and machine learning capabilities, across their organization 
                    with trusted data, speed, and governance - all in one place and to run across any cloud environment.
                </p>
                <p>
                    Also at Think, IBM is announcing further planned advancements, including a GPU-as-a-service infrastructure offering designed to support AI-intensive workloads, 
                    an AI-powered dashboard to measure, track, manage, and help report on cloud carbon emissions, and a new practice for watsonx and generative AI from IBM Consulting 
                    that will support client deployment of AI.
                </p>
                <p>
                    With watsonx, IBM is offering an AI development studio with access to IBM-curated and trained foundation models and open-source models, access to a data store 
                    to enable the gathering and cleansing of training and tuning data, and a toolkit for governance of AI into the hands of businesses that will provide a seamless 
                    end-to-end AI workflow that will make AI easier to adapt and scale.
                </p>
                <p>
                    "With the development of foundation models, AI for business is more powerful than ever," said Arvind Krishna, IBM Chairman and CEO. "Foundation models make deploying 
                    AI significantly more scalable, affordable, and efficient. We built IBM watsonx for the needs of enterprises, so that clients can be more than just users, they can 
                    become AI advantaged. With IBM watsonx, clients can quickly train and deploy custom AI capabilities across their entire business, all while retaining full control of 
                    their data." 
                </p>
                <p>
                    Clients will have access to the toolset, technology, infrastructure, and consulting expertise to build their own — or fine-tune and adapt available AI models — on 
                    their own data and deploy them at scale in a more trustworthy and open environment to drive business success. Competitive differentiation and unique business value 
                    will be able to be increasingly derived from how adaptable an AI model can be to an enterprise's unique data and domain knowledge.
                </p>
                <p>
                    The IBM watsonx platform consists of three unique product sets to address these needs: 
                </p>
                <p>
                    <b>IBM watsonx.ai:</b> A next generation enterprise studio, expected to be generally available in July 2023, for AI builders to train, test, tune, and deploy both 
                    traditional machine learning and new generative AI capabilities powered by foundation models through an open and intuitive user interface. 
                </p>
                <p>
                    &#9864 The AI studio provides a range of foundation models, training and tuning tools, and cost-effective infrastructure that facilitate the entire data and AI 
                    lifecycle, from data preparation to model development, deployment, and monitoring.
                </p>
                <p>
                    &#9864 The studio also includes a foundation model library that gives users easy access to IBM curated and trained foundation models. The IBM foundation models 
                    use a large, curated set of enterprise data backed by a robust filtering and cleansing process and auditable data lineage. These models are being trained not just 
                    on language, but on a variety of modalities, including code, time-series data, tabular data, geospatial data, and IT events data. An initial set of foundation 
                    models will be made available in beta tech preview to select clients. Examples of model categories include: 
                </p>
                <pre>
            &#9864 <b>fm.code:</b> Models built to automatically generate code for developers through a natural-language interface to boost developer productivity and enable the automation of many IT tasks.
            &#9864 <b>fm.NLP:</b> A collection of large language models (LLMs) for specific or industry-specific domains that utilize curated data where bias can be mitigated more easily and can be quickly customized using client data.
            &#9864 <b>fm.geospatial:</b> Model built on climate and remote sensing data to help organizations understand and plan for changes in natural disaster patterns, biodiversity, land use, and other geophysical processes that 
            could impact their businesses.
                </pre>
                <p>
                    &#9864 As part of a new collaboration between IBM and Hugging Face, the watsonx.ai studio will build upon Hugging Face's open-source libraries and offer thousands of 
                    Hugging Face open models and datasets. This is part of IBM's commitment to delivering to clients an open ecosystem approach that allows them to leverage the best 
                    models and architecture for their unique business needs.
                </p>
                <p>
                    <b>IBM watsonx.data:</b> A fit-for-purpose data store built on open lakehouse architecture that is optimized for governed data and AI workloads, supported by querying, 
                    governance, and open data formats to access and share data. The solution is expected to be generally available in July 2023 and: 
                </p>
                <p>
                    &#9864 The solution can manage workloads both on-premise and across multi-cloud environments.
                </p>
                <p>
                    &#9864 Through workload optimization, with this solution, an organization can reduce data warehouse costs by up to 50 percent. 
                </p>
                <p>
                    &#9864 Watsonx.data will allow users to access their increasingly robust data through a single point of entry while applying multiple fit-for-purpose query engines 
                    to uncover valuable insights.
                </p>
                <p>
                    &#9864 It will also provide built-in governance tools, automation and integrations with an organization's existing databases and tools to simplify set-up and user 
                    experience.
                </p>
                <p>
                    <b>IBM watsonx.governance:</b> An AI governance toolkit to enable trusted AI workflows. The solution, expected to be generally available later this year: 
                </p>
                <p>
                    &#9864 Operationalizes governance to help mitigate the risk, time and cost associated with manual processes and provides the documentation necessary to drive 
                    transparent and explainable outcomes.
                </p>
                <p>
                    &#9864 Provides the mechanisms to protect customer privacy, proactively detect model bias and drift, and help organizations meet their ethics standards.
                </p>
                <p>
                    With the watsonx platform, clients are enabled to meet the needs of their organization in five key areas of their business: interacting and conversing with customers 
                    and employees; automating business workflows and internal processes; automating IT processes; protecting against threats; and tackling sustainability goals.
                </p>
                <iframe id="iframe" src="https://www.youtube.com/embed/X21gAzRoi7o?autoplay=1&mute=1" frameborder="0" allowfullscreen>
                </iframe>
            </article>
    _ARTICLE;

    require_once 'comments.php';
    
    require_once 'footer.php';

?>
               