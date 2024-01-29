<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORTH YEAR</title>
    <link rel="shortcut icon" href="../image/weblogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="year_style.css">

</head>
<body>


    <header class="nav" id="myHeader">
        <a href="../secondPage.php"><img src="../image/coe logo.jpg" class="logo" ></a>
        <h1 style="font-size: 80px;">FORTH YEAR</h1>
        <a href=""><img src="../image/logoplsp.jpg" class="logo_plsp" ></a>
    </header>
    <hr>


    <h2>FIRST SEMESTER</h2>
    <section class="module">
        <ul id="moduleList"></ul>
    </section>


    <script>
const modules = [
            { name: "Engineering Management", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1KD1QJTS2qjQG2O_6cQEGKV-Ue_vPRczm/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Engineering+Management" },
            { name: "Microprocessors", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1zoV221fIlw4rjauTkUV5MrxqiLRVU5WH/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Microprocessors" },
            { name: "TECHNOPRENEURSHIP", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1NhU9KF3uV_oVQm6qR3hnSktlOQz68rrV/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=TECHNOPRENEURSHIP" },
            { name: "Emerging Technologies in CPE", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1RZvxGqiUNRAQOT7xtpZP6ewlAJEqzRlQ/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Emerging+Technologies+in+CPE" },
            { name: "CpE Practice and Design 1", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=CpE+Practice+and+Design+1" },
            { name: "Digital Signal Processing", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/15w_QLn6_fsL7n6830EUF6LWk8kz4yfUe/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Digital+Signal+Processing" },
            { name: "CPE Laws and Professional Practice", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=CPE+Laws+and+Professional+Practice" },
            { name: "Gender and Society", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1RSqqfvRzUJw6uXh5xyuyGTSOvSM0vRl0/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Gender+and+Society" }
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
    </section>

    <script>
        const secondSemesterModules = [
            { name: "Elective 3", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Elective+3" },
            { name: "CpE Practice and Design 2", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=CpE+Practice+and+Design+2" },
            { name: "Seminars and Fieldtrips", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Seminars+and+Fieldtrips" },
            { name: "Embedded System", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1enLYHyhIVk2OH9nc9BMIeLuLsTpXVwEU/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Embedded+System" },
            { name: "Computer Architechture and Organization", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1Ol7JLXxzwtsj27W4TNtMuTvC7yCby24w/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Computer+Architecture+and+Organization" }
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
                        <li><a href="${module.ytLink}" target="_blank">VIDEOS</a></li>
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
