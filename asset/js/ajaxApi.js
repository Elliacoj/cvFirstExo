function dataSH() {
    let contentSection = document.getElementById("contentSection").value;
    let choiceSection = document.getElementById("choiceSection").value;
    if(contentSection) {
        let xhr = new XMLHttpRequest();
        const message = {
            'content': contentSection,
            'section': choiceSection,
            'page': 1
        };

        xhr.open('POST', '/api/SkillsAndHobbits/skillsAndHobbits.php');
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.send(JSON.stringify(message));

        document.getElementById("contentSection").innerHTML = "";
    }

    let $xml = new XMLHttpRequest;
    $xml.open("get", "/api/SkillsAndHobbits/skillsAndHobbits.php");
    $xml.responseType = "json";
    $xml.onload = function () {
        let response = $xml.response;

        let ulSkills = document.getElementById('ulSkills');
        let ulHobbits = document.getElementById('ulHobbit');
        ulSkills.innerHTML = '';
        ulHobbits.innerHTML = '';
        response.forEach(function (e) {
            let li = document.createElement("li");
            li.innerHTML = e['content'];
            if(e['section'] === '0') {
                ulSkills.appendChild(li);
            }
            else {
                ulHobbits.appendChild(li);
            }
        })
    }
    $xml.send();
}

dataSH();

function dataSW() {
    let contentDt = document.getElementById("contentDt").value;
    let contentDd = document.getElementById("contentDd").value;
    let choiceDl = document.getElementById("choiceDl").value;

    if(contentDt) {
        if(contentDd) {
            document.getElementById("contentDt").value = "";
            document.getElementById("contentDd").value = "";

            let xhr = new XMLHttpRequest();
            const message = {
                'contentDt': contentDt,
                'contentDd': contentDd,
                'dl': choiceDl
            };

            xhr.open('POST', '/api/studyAndWork/studyAndWork.php');
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.send(JSON.stringify(message));
        }

    }

    let $xml = new XMLHttpRequest;
    $xml.open("get", "/api/studyAndWork/studyAndWork.php");
    $xml.responseType = "json";
    $xml.onload = function () {
        let response = $xml.response;

        let dlStudy = document.getElementById('dlStudy');
        let dlWork = document.getElementById('dlWork');

        dlStudy.innerHTML = '';
        dlWork.innerHTML = '';

        response.forEach(function (e) {
            let dt = document.createElement("dt");
            let dd = document.createElement("dd");
            dt.innerHTML = e['contentDt'];
            dd.innerHTML = e['contentDd'];
            if(e['dl'] === '0') {
                dlStudy.appendChild(dt);
                dlStudy.appendChild(dd);
            }
            else {
                dlWork.appendChild(dt);
                dlWork.appendChild(dd);
            }
        })
    }
    $xml.send();
}

dataSW();

document.getElementById("buttonSection").addEventListener("click", dataSH);
document.getElementById("buttonDl").addEventListener("click", dataSW);