<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../image/weblogo.ico" type="image/x-icon">
    <title>THIRD YEAR</title>
    <link rel="shortcut icon" href="../image/weblogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="year_style.css">
</head>
<body>

    <header class="nav" id="myHeader">
        <a href="../secondPage.php"><img src="../image/coe logo.jpg" class="logo" ></a>
        <h1 style="font-size: 80px;">THIRD YEAR</h1>
        <a href=""><img src="../image/logoplsp.jpg" class="logo_plsp" ></a>
    </header>

    <hr>

    <h2>FIRST SEMESTER</h2>
    <section class="module">
        <ul id="moduleList"></ul>
    </section>

    <script>
        const modules = [
            { name: "Life and Works of Rizal", pdfLink: "https://drive.google.com/file/d/1TmNpjdknofWM-z4_Ejj5_DtkxB3l6KhH/view?usp=drive_link", websiteLink: "https://www.studocu.com/ph/document/bukidnon-state-university/nursing/module-1-the-life-and-works-of-jose-rizal/19065767", ytLink: "https://www.youtube.com/results?search_query=Life+and+Works+of+Rizal" },
            { name: "Logic Circuits and Design", pdfLink: "https://drive.google.com/file/d/15Fv1-ComIDLSjwGebyMBpXpUeZpQCCxE/view?usp=drive_link", websiteLink: "https://www.javatpoint.com/software-engineering-software-design", ytLink: "https://www.youtube.com/results?search_query=Logic+Circuits+and+Design" },
            { name: "Numerical Methods", pdfLink: "https://drive.google.com/file/d/1gHVydSwNfE0x4-GGiN4ui2lz749zRZBo/view?usp=drive_link", websiteLink: "https://www.javatpoint.com/software-engineering-software-design", ytLink: "https://www.youtube.com/results?search_query=Numerical+Methods" },
            { name: "Data and Digital Communications", pdfLink: "unavailable.png", websiteLink: "https://www.javatpoint.com/software-engineering-software-design", ytLink: "https://www.youtube.com/results?search_query=Data+and+Digital+Communications" },
            { name: "Software Design", pdfLink: "https://drive.google.com/file/d/17aO-MXlnhVKKWZeWmioZurbtjQWOB9VT/view?usp=drive_link", websiteLink: "https://www.javatpoint.com/software-engineering-software-design", ytLink: "https://www.youtube.com/results?search_query=Software+Design" },
            { name: "Elective 1", pdfLink: "unavailable.png", websiteLink: "https://www.javatpoint.com/software-engineering-software-design", ytLink: "https://www.youtube.com/results?search_query=Elective+1" },
            { name: "Computer Engineering Drafting and Design", pdfLink: "unavailable.png", websiteLink: "https://www.javatpoint.com/software-engineering-software-design", ytLink: "https://www.youtube.com/results?search_query=Computer+Engineering+Drafting+and+Design" }
        ];



        function createModuleListItem(module) {
            const li = document.createElement("li");
            li.innerHTML = `<a href="${module.pdfLink}" target="_blank" class="first">${module.name}</a>
                <div class="Recommended">
                    <h3>RECOMMENDED</h3>
                    <ul class="second">
                        <li><a href="${module.websiteLink}" target="_blank">BOOK</a></li>
                    </ul>
                    <br>
                    <ul class="third">
                        <li><a href="${module.ytLink}" target="_blank">VIDEO</a></li>
                    </ul>
                </div><br><br>`;
            return li;
        }

 
        const moduleList = document.getElementById("moduleList");

        modules.forEach(module => {
            moduleList.appendChild(createModuleListItem(module));
        });
    </script>



    <h2>SECOND SEMESTER</h2>
    <section class="module">
            <ul id="moduleList2"></ul>
        </div>
    </section>

    <script>
        const secondSemesterModules = [
            { name: "English in the Workplace", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=English+in+the+Workplace" },
            { name: "Basic Occupational Health and Safety", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1MWykMjgwjMEv6SyFOUGkcCe72LD5jqFX/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Basic+Occupational+Health+and+Safety" },
            { name: "Computer Networks and Security", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1s7kMYcA5aN6yX8h1oRjQm1fpxSTiq5iS/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Computer+Networks+and+Security" },
            { name: "Introduction to Hardware Description Language", pdfLink: "", websiteLink: "https://drive.google.com/file/d/1pbfrx8NXnItbVVICgUWIPmVySEBCaXiK/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Introduction+to+Hardware+Description+Language" },
            { name: "Methods of Research", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1bHp217jGCZaQEnUkGf8AhiZwSv4sFCkp/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Methods+of+Research" },
            { name: "Fundamentals of Mixed Signals and Sensors", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/19Z_PxcNoAwRfV0UkoSJQAKYV9q1m_q8L/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Fundamentals+of+Mixed+Signals+and+Sensors" },
            { name: "Feedback and Control Systems", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1z1QVfWXT1q5oualoF283g3Pt3AIc-73c/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Feedback+and+Control+Systems" },
            { name: "Elective 2", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Elective+2" }
        ];


        function createModuleListItem(module) {
            const li = document.createElement("li");
            li.innerHTML = `<a href="${module.pdfLink}" target="_blank" class="first">${module.name}</a>
                <div class="Recommended">
                    <h3>RECOMMENDED</h3>
                    <ul class="second">
                        <li><a href="${module.websiteLink}" target="_blank">BOOK</a></li>
                    </ul>
                    <br>
                    <ul class="third">
                        <li><a href="${module.ytLink}" target="_blank">VIDEO</a></li>
                    </ul>
                </div><br><br>`;
            return li;
        }

        const moduleList2 = document.getElementById("moduleList2");

        secondSemesterModules.forEach(module => {
            moduleList2.appendChild(createModuleListItem(module));
        });
    </script>
    <script src="index.js"></script>
    
</body>
</html>