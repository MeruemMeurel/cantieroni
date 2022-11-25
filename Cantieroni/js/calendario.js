const date = new Date;
const date1 = new Date;
let month = date.getMonth();
let month1 = date1.getMonth();

function clickCalendar(id) {
    let selector = $('#'.concat(id));

    if (selector.css("color") !== "rgb(0, 0, 0)")
        return;

    if (dayIdSelected !== null) {
        $('#'.concat(dayIdSelected)).css("color","black");
        $('#'.concat(dayIdSelected)).css("background-color","transparent");
        $('#'.concat(dayIdSelected)).css("font-weight","normal");
    }

    dayIdSelected = id;

    selector.css("color","white");
    selector.css("background-color","darkorange");
    selector.css("font-weight","bold");

    selectDay(new Date(date.getFullYear(), date.getMonth(), selector.text()));
}

function loadCalendar() {
    date.setDate(1);

    $('#month-year').text(translateMonth(date.getMonth()) + " " + date.getFullYear());
    month = date.getMonth();

    for (let i = 0; i<7; i++) {
        for (let j = 0; j<6; j++) {
            $('#'.concat(i).concat('-').concat(j)).text("");
            $('#'.concat(i).concat('-').concat(j)).css("color", "black");
        }
    }

    let firstLineLoad = true

    for (let i = 0; i<6; i++) {
        for (let j = 0; j<7; j++) {
            if (firstLineLoad === true) {
                date.setDate(date.getDate()-((date.getDay() === 0 ? +6 : date.getDay()-1)));
                firstLineLoad = false;
            }
            $('#'.concat(j).concat('-').concat(i)).text(date.getDate());
            if (date.getMonth() !== month)
                $('#'.concat(j).concat('-').concat(i)).css("color", "#a6a6a6");
            date.setDate(date.getDate()+1);
        }
    }
    checkSelected();
}

function prevMonth() {
    date.setMonth(date.getMonth()-2);
    loadCalendar();
}

function nextMonth() {
    date.setMonth(date.getMonth());
    loadCalendar();
}

function translateMonth(number) {
    switch (number) {
        case 0:
            return "Gennaio";
        case 1:
            return "Febbraio";
        case 2:
            return "Marzo";
        case 3:
            return "Aprile";
        case 4:
            return "Maggio";
        case 5:
            return "Giugno";
        case 6:
            return "Luglio";
        case 7:
            return "Agosto";
        case 8:
            return "Settembre";
        case 9:
            return "Ottobre";
        case 10:
            return "Novembre";
        case 11:
            return "Dicembre";
    }
    return "";
}

function daysInMonth (month) {
    return new Date(1970, month, 0).getDate();
}

function checkSelected() {
    if (daySelected.getMonth() !== date.getMonth()) {
        $('#'.concat(dayIdSelected)).css("color","black");
        $('#'.concat(dayIdSelected)).css("background-color","transparent");
    } else {
        $('#'.concat(dayIdSelected)).css("color","white");
        $('#'.concat(dayIdSelected)).css("background-color","darkorange");
    }
}

// noinspection JSJQueryEfficiency

let roomSelected = null;
let daySelected = new Date();
let startHoursSelected = 9;
let startMinutesSelected = 0;
let finishHoursSelected = 13;
let finishMinutesSelected = 0;

let dayIdSelected = null;

function selectDay(date) {
    daySelected = date;
    if(dayIdSelected !== null)
        $('#day-sel-2').text("Giorno selezionato: " + date.getDate() + "/" + date.getMonth() + "/" +  date.getFullYear());
    //loadPresenti();
}


//Link api google https://developers.google.com/people/api/rest/v1/people/get

function defaultSelecter() {
    selectDay(daySelected);
}

function clickCalendar(id) {
    let selector = $('#'.concat(id));

    if (selector.css("color") !== "rgb(0, 0, 0)")
        return;

    if (dayIdSelected !== null) {
        $('#'.concat(dayIdSelected)).css("color","black");
        $('#'.concat(dayIdSelected)).css("background-color","transparent");
        $('#'.concat(dayIdSelected)).css("font-weight","normal");
    }

    dayIdSelected = id;

    selector.css("color","white");
    selector.css("background-color","darkorange");
    selector.css("font-weight","bold");

    selectDay(new Date(date.getFullYear(), date.getMonth(), selector.text()));
}