<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="calan.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <style>
    :root 
{
    --dark-body: #4d4c5a;
    --dark-main: #141529;
    --dark-second: #79788c;
    --dark-hover: #323048;
    --dark-text: #f8fbff;
    --light-body: #f3f8fe;
    --light-main: #fdfdfd;
    --light-second: #c3c2c8;
    --light-hover: #edf0f5;
    --light-text: #151426;
    --blue: #007497;
    --white: #fff;
    --shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    --font-family: cursive;
}
.light {
    --bg-body: var(--light-body);
    --bg-main: var(--light-main);
    --bg-second: var(--light-second);
    --color-hover: var(--light-hover);
    --color-txt: var(--light-text);
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

html,
body {
    height: 100vh;
    display: grid;
    place-items: center;
    font-family: var(--font-family);
    background-color: var(--bg-body);
}
.calendar {
    height: max-content;
    width: max-content;
    background-color: var(--bg-main);
    border-radius: 30px;
    padding: 20px;
    position: relative;
    overflow: hidden;
}

.light .calendar {
    box-shadow: var(--shadow);
}

.calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 25px;
    font-weight: 600;
    color: var(--color-txt);
    padding: 10px;
}

.calendar-body {
    padding: 10px;
}

.calendar-week-day {
    height: 50px;
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    font-weight: 600;
}

.calendar-week-day div {
    display: grid;
    place-items: center;
    color: var(--bg-second);
}

.calendar-days {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 2px;
    color: var(--color-txt);
}

.calendar-days div {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
    position: relative;
    cursor: pointer;
    animation: to-top 1s forwards;
}

.calendar-days div span {
    position: absolute;
}

.calendar-days div:hover span {
    transition: width 0.2s ease-in-out, height 0.2s ease-in-out;
}

.calendar-days div span:nth-child(1),
.calendar-days div span:nth-child(3) {
    width: 2px;
    height: 0;
    background-color: var(--color-txt);
}

.calendar-days div:hover span:nth-child(1),
.calendar-days div:hover span:nth-child(3) {
    height: 100%;
}

.calendar-days div span:nth-child(1) {
    bottom: 0;
    left: 0;
}

.calendar-days div span:nth-child(3) {
    top: 0;
    right: 0;
}

.calendar-days div span:nth-child(2),
.calendar-days div span:nth-child(4) {
    width: 0;
    height: 2px;
    background-color: var(--color-txt);
}

.calendar-days div:hover span:nth-child(2),
.calendar-days div:hover span:nth-child(4) {
    width: 100%;
}

.calendar-days div span:nth-child(2) {
    top: 0;
    left: 0;
}

.calendar-days div span:nth-child(4) {
    bottom: 0;
    right: 0;
}

.calendar-days div:hover span:nth-child(2) {
    transition-delay: 0.2s;
}

.calendar-days div:hover span:nth-child(3) {
    transition-delay: 0.4s;
}

.calendar-days div:hover span:nth-child(4) {
    transition-delay: 0.6s;
}

.calendar-days div.curr-date,
.calendar-days div.curr-date:hover {
    background-color: var(--blue);
    color: var(--white);
    border-radius: 50%;
}

.calendar-days div.curr-date span {
    display: none;
}

.month-picker {
    padding: 5px 10px;
    border-radius: 10px;
    cursor: pointer;
}

.month-picker:hover {
    background-color: var(--color-hover);
}

.year-picker {
    display: flex;
    align-items: center;
}

.year-change {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    display: grid;
    place-items: center;
    margin: 0 10px;
    cursor: pointer;
}

.year-change:hover {
    background-color: var(--color-hover);
}

.calendar-footer {
    padding: 10px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}

.toggle {
    display: flex;
}

.toggle span {
    margin-right: 10px;
    color: var(--color-txt);
}

.month-list {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: var(--bg-main);
    padding: 20px;
    grid-template-columns: repeat(3, auto);
    gap: 5px;
    display: grid;
    transform: scale(1.5);
    visibility: hidden;
    pointer-events: none;
}

.month-list.show {
    transform: scale(1);
    visibility: visible;
    pointer-events: visible;
    transition: all 0.2s ease-in-out;
}

.month-list > div {
    display: grid;
    place-items: center;
}

.month-list > div > div {
    width: 100%;
    padding: 5px 20px;
    border-radius: 10px;
    text-align: center;
    cursor: pointer;
    color: var(--color-txt);
}

.month-list > div > div:hover {
    background-color: var(--color-hover);
}
    </style>
    <title>Document</title>
</head>
<body class="light">
<div class="calendar">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">April</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2022</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days"></div>
        </div>
       
        <div class="month-list"></div>
    </div>
    <script>
        let calendar = document.querySelector('.calendar')

const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

isLeapYear = (year) => {
    return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 ===0)
}

getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28
}

generateCalendar = (month, year) => {

    let calendar_days = calendar.querySelector('.calendar-days')
    let calendar_header_year = calendar.querySelector('#year')

    let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

    calendar_days.innerHTML = ''

    let currDate = new Date()
    if (month > 11 || month < 0) month = currDate.getMonth()
    if (!year) year = currDate.getFullYear()

    let curr_month = `${month_names[month]}`
    month_picker.innerHTML = curr_month
    calendar_header_year.innerHTML = year

    // get first day of month
    
    let first_day = new Date(year, month, 1)

    for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
        let day = document.createElement('div')
        if (i >= first_day.getDay()) {
            day.classList.add('calendar-day-hover')
            day.innerHTML = i - first_day.getDay() + 1
            day.innerHTML += `<span></span>
                            <span></span>
                            <span></span>
                            <span></span>`
            if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                day.classList.add('curr-date')
            }
        }
        calendar_days.appendChild(day)
    }
}

let month_list = calendar.querySelector('.month-list')

month_names.forEach((e, index) => {
    let month = document.createElement('div')
    month.innerHTML = `<div data-month="${index}">${e}</div>`
    month.querySelector('div').onclick = () => {
        month_list.classList.remove('show')
        curr_month.value = index
        generateCalendar(index, curr_year.value)
    }
    month_list.appendChild(month)
})

let month_picker = calendar.querySelector('#month-picker')

month_picker.onclick = () => {
    month_list.classList.add('show')
}

let currDate = new Date()

let curr_month = {value: currDate.getMonth()}
let curr_year = {value: currDate.getFullYear()}

generateCalendar(curr_month.value, curr_year.value)

document.querySelector('#prev-year').onclick = () => {
    --curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}

document.querySelector('#next-year').onclick = () => {
    ++curr_year.value
    generateCalendar(curr_month.value, curr_year.value)
}
    </script>
</body>
</html>