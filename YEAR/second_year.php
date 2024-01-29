<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECOND YEAR</title>
    <link rel="shortcut icon" href="../image/weblogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="year_style.css">

</head>
<body>


    <header class="nav" id="myHeader">
        <a href="../secondPage.php"><img src="../image/coe logo.jpg" class="logo" ></a>
        <h1 style="font-size: 80px;">SECOND YEAR</h1>
        <a href=""><img src="../image/logoplsp.jpg" class="logo_plsp" ></a>
    </header>
    <hr>


    <h2>FIRST SEMESTER</h2>
    <section class="module">
        <ul id="moduleList"></ul>
    </section>


    <script>
const modules = [
            { name: "Arts Appreciation", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1JFwvzFfWZ3tN9ZPr4MFejnJLWpPKGd-y/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Arts+Appreciation" },
            { name: "Science Technology and Society", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/18M2dy3zJptYVflyzLMvk3kHrlzfW0y4_/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Science+Technology+and+Society" },
            { name: "Sinesosyedad", pdfLink: "", websiteLink: "unavailable.png", ytLink: "https://www.youtube.com/results?search_query=Sinesosyedad" },
            { name: "Chemistry for Engineers", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/11j7WgCdyW6sMujlwFqfdTjdBEy28ZRcP/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Chemistry+for+Engineers" },
            { name: "Fundamentals of Electrical Circuits", pdfLink: "https://drive.google.com/file/d/1-EwqLpgu2NNWcOf0a-WEBwmPJ4p6BLci/view?usp=sharing", websiteLink: "https://drive.google.com/file/d/1ze9JESNy_x_jg8GPauaEhSZZ9WFGASc4/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Fundamentals+of+Electrical+Circuits" },
            { name: "Differential Equations", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1i-mITC82o1nN2XAjlUM9jHAhFo2PfBmy/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Differential+Equations" },
            { name: "Data Structures and Algorithm", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Data+Structures+and+Algorithm" },
            { name: "Individual and Dual Sports", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1mC4I6_QL41G_pI9zd2i3iEougphIB_Kw/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Individual+and+Dual+Sports" },
            { name: "Discrete Mathematics", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/14mEMiz8qU2IL311GW1PKXHd06weE4MZr/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Discrete+Mathematics" }
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
            { name: "Purposive Communication", pdfLink: "https://drive.google.com/file/d/1HO_Xa2c6WSzWuUYM-uEQ1tUn3UQ7um4d/view?usp=drive_linkf", websiteLink: "https://drive.google.com/file/d/1YIDw3tF9nVshOhE7W6caZiaam1FYOzTe/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Purposive+Communication" },
            { name: "Ethics", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/19EWiV4lNppB2upOevNZoIWiU-Hev3PzC/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Ethics" },
            { name: "Foreign Language", pdfLink: "https://drive.google.com/file/d/1AjLk7yUWShEr6RQ17DVPtS9LYYKMHqiE/view?usp=drive_link", websiteLink: "https://drive.google.com/file/d/1OpupOkOPYtA68WbMlh-lUyI-NFNMW7eA/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Foreign+Language" },
            { name: "Engineering Data Analysis", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/17LzQ_7z8xFlQVkzRDmE300mFO5b-CV-2/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Engineering+Data+Analysis" },
            { name: "Computer Aided Drafting", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1S2eTSiY1fij3vmS84bhHArJldWqKlzpx/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Computer+Aided+Drafting" },
            { name: "Engineering Economy", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1fKeda8h4DRnqODCKTrTpt8iujZCswyyH/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Engineering+Economy" },
            { name: "Fundamentals of Electronic Circuits", pdfLink: "https://drive.google.com/file/d/1TMH3aAtK5uYG4c6WV-GKgiUw4Ki15VFd/view?usp=drive_link", websiteLink: "https://drive.google.com/file/d/1hvW2eD04iAdcsJYbPyzWcuiscJ4Tv5VT/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Fundamentals+of+Electronic+Circuits" },
            { name: "Indigenous People's Studies", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=INDIGENOUS+PEOPLE%27S+STUDIES" },
            { name: "Team Sports with Sports Management", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Team+Sports+with+Sports+Management" },
            { name: "Operating Systems", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/16yn_F_YnTTFB-e8LTcBb7vRnLPevWYPc/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Operating+Systems" }
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
