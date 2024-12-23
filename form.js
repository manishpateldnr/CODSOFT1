function populate(s1, s2) {
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "all";
    if (s1.value == "B.Tech") {
        var optionArray = ["|all", "CSE|CSE", "ECE|ECE", "EEE|EEE", "Mechanical|Mechanical", "Civil|Civil", "Dairy tech|Dairy tech", "Agri.|Agri.", "Phyto|Phyto", "Mining|Mining", "Aerospace|Aerospace", "Bio-tech|Bio-tech", "other|other"];
    } else if (s1.value == "B.Sc") {
        var optionArray = ["|all", "B.sc.(hons.) Agriculture|B.sc.(hons.) Agriculture", "B.Sc. Fishery|B.Sc. Fishery", "Applied Science|Applied Science", "Paramedical|Paramedical", "Forensic|Forensic", "other|other"];
    } else if (s1.value == "B.Pharma") {
        var optionArray = ["|all", "B.Pharma|B.Pharma", "other|other"];
    } else if (s1.value == "B.Com") {
        var optionArray = ["|all", "B.Com|B.Com", "other|other"];
    } else if (s1.value == "BCA") {
        var optionArray = ["|all", "BCA|BCA", "other|other"];
    } else if (s1.value == "BBA") {
        var optionArray = ["|all", "BBA|BBA", "other|other"];
    } else if (s1.value == "B.Vocational") {
        var optionArray = ["|all", "B.Vocational|B.Vocational", "other|other"];
    } else if (s1.value == "Diploma") {
        var optionArray = ["|all", "CSE|CSE", "ECE|ECE", "EE|EE", "Civil|Civil", "Mechanical|Mechanical", "Automobile|Automobile", "Mining|Mining", "D. pharma|D. pharma", "Paramedical|Paramedical", "other|other"];
    } else if (s1.value == "ITI") {
        var optionArray = ["|all", "Automobile|Automobile", "|Electrical|Electrical", "Mechanical|Mechanical", "other|other"];
    } else if (s1.value == "M.Tech") {
        var optionArray = ["|all", "PSCE|PSCE", "SE|SE", "TE|TE", "other|other"];
    } else if (s1.value == "M.Sc") {
        var optionArray = ["|all", "Paramedical|Paramedical", "Applied science|Applied science", "Agriculture|Agriculture", "Forensic|Forensic", "Cyber security|Cyber security", "other|other"];
    } else if (s1.value == "MBA") {
        var optionArray = ["|all", "MBA|MBA", "other|other"];
    } else if (s1.value == "MCA") {
        var optionArray = ["|all", "MCA|MCA", "other|other"];
    } else if (s1.value == "PhD") {
        var optionArray = ["|all", "PhD|PhD", "other|other"];
    } else if(s1.value == "other"){
        var optionArray = ["|all", "other|other"];
    }


    for (var option in optionArray) {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}