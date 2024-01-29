<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST YEAR</title>
    <link rel="shortcut icon" href="../image/weblogo.ico" type="image/x-icon">
    <link rel="stylesheet" href="year_style.css">

</head>
<body>


    <header class="nav" id="myHeader">
        <a href="../secondPage.php"><img src="../image/coe logo.jpg" class="logo" ></a>
        <h1 style="font-size: 80px;">FIRST YEAR</h1>
        <a href=""><img src="../image/logoplsp.jpg" class="logo_plsp" ></a>
    </header>
    <hr>


    <h2>FIRST SEMESTER</h2>
    <section class="module">
        <ul id="moduleList"></ul>
    </section>


    <script>
        const modules = [
            { name: "Understanding Yourself", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1ErzMpzCtO0sxRe5MXgTK9XnTOvsR-Ttd/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Understanding+Yourself" },
            { name: "Readings in Philippine HIstory", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1XqvQ3i0kwhjyRm3CXoAWi6szBoLwx19B/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Readings+in+Philippine+HIstory" },
            { name: "Mathematics in the Modern World ", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1hW6OYG6Kp8Ez1mQkVibnjPgUENnpJRaT/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Mathematics+in+the+Modern+World" },
            { name: "Kontekstuwalisadong Komunikasyon sa Filipino", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Kontekstuwalisadong+Komunikasyon+sa+Filipino" },
            { name: "Local History and Culture", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Local+History+and+Culture" },
            { name: "Calculus 1", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1fXcht593SY6gBLXNBjkM6nlOVtb7-sFe/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Calculus+1" },
            { name: "Computer Engineering as Discipline", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1s7kMYcA5aN6yX8h1oRjQm1fpxSTiq5iS/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Computer+Engineering+as+Discipline" },
            { name: "Programming Logic and Design", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1c0b2B32oVvdcSGD6lw6uzypML7W4GHdN/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Programming+Logic+and+Design" },
            { name: "National Service Training Program 1", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=National+Service+Training+Program+1" },
            { name: "Physical Education 1", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Physical+Education+1" },
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
            { name: "The Contemporary World", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1wZ0Ggcjz8gkxpy_uTVSrklOyzPT103ID/view?usp=sharing", ytLink: "https://www.youtube.com/results?search_query=The+Contemporary+World" },
            { name: "Filipino sa Iba't Ibang Disiplina", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Filipino+sa+Iba't+Ibang+Disiplina" },
            { name: "Office Productivity Tools", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1QI2rYa3sJpeaS_7fLDa0cxLZrofgMIBk/view?usp=sharing", ytLink: "https://www.youtube.com/results?search_query=Office+Productivity+Tool" },
            { name: "Filipino Values and Ideals", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Filipino+Values+and+Ideals" },
            { name: "Sosyedad at Literatura", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Sosyedad+at+Literatura" },
            { name: "Physics for Engineers", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1PbvaMHmatnMRkM321KZgI4j0uv229qa_/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Physics+for+Engineers" },
            { name: "Calculus 2", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1HBKTIhVfb-30qcZR4ovxVdDjpnJKla-w/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Calculus+2" },
            { name: "National Service Training Program 2", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=National+Service+Training+Program+2" },
            { name: "Physical Education 2", pdfLink: "unavailable.png", websiteLink: "", ytLink: "https://www.youtube.com/results?search_query=Physical+Education+2" },
            { name: "Object Oriented Programming", pdfLink: "unavailable.png", websiteLink: "https://drive.google.com/file/d/1GxFinWtS5ciIB3sZj8iTkFBij3rJBDZa/view?usp=drive_link", ytLink: "https://www.youtube.com/results?search_query=Object+Oriented+Programming" }
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

