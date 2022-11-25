<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <!-- <link rel="stylesheet" href="css/index.css"> -->
    <link rel="stylesheet" href="../css/calendario.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <script src="../js/calendario.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <div class="container mt-4 ml-3 position-fixed calendar-div">
        <div class="calendar">
            <div class="head">
                <ul class="d-flex align-items-center justify-content-center">
                    <li><img class="item item-img" src="../img/left.png" alt="left" onclick="prevMonth()"></li>
                    <li><a class="item" id="month-year"></a></li>
                    <li><img class="item item-img" src="../img/right.png" alt="right" onclick="nextMonth()"></li>
                </ul>
            </div>
            <div class="body">
                <table>
                    <tr>
                        <th>Lun</th>
                        <th>Mar</th>
                        <th>Mer</th>
                        <th>Gio</th>
                        <th>Ven</th>
                        <th>Sab</th>
                        <th>Dom</th>
                    </tr>
                    <tr>
                        <td id="0-0"  onclick="clickCalendar('0-0')">1</td>
                        <td id="1-0"  onclick="clickCalendar('1-0')">2</td>
                        <td id="2-0"  onclick="clickCalendar('2-0')">3</td>
                        <td id="3-0"  onclick="clickCalendar('3-0')">4</td>
                        <td id="4-0"  onclick="clickCalendar('4-0')">5</td>
                        <td id="5-0"  onclick="clickCalendar('5-0')">6</td>
                        <td id="6-0"  onclick="clickCalendar('6-0')">7</td>
                    </tr>
                    <tr>
                        <td id="0-1"  onclick="clickCalendar('0-1')">8</td>
                        <td id="1-1"  onclick="clickCalendar('1-1')">9</td>
                        <td id="2-1"  onclick="clickCalendar('2-1')">10</td>
                        <td id="3-1"  onclick="clickCalendar('3-1')">11</td>
                        <td id="4-1"  onclick="clickCalendar('4-1')">12</td>
                        <td id="5-1"  onclick="clickCalendar('5-1')">13</td>
                        <td id="6-1"  onclick="clickCalendar('6-1')">14</td>
                    </tr>
                    <tr>
                        <td id="0-2"  onclick="clickCalendar('0-2')">15</td>
                        <td id="1-2"  onclick="clickCalendar('1-2')">16</td>
                        <td id="2-2"  onclick="clickCalendar('2-2')">17</td>
                        <td id="3-2"  onclick="clickCalendar('3-2')">18</td>
                        <td id="4-2"  onclick="clickCalendar('4-2')">19</td>
                        <td id="5-2"  onclick="clickCalendar('5-2')">20</td>
                        <td id="6-2"  onclick="clickCalendar('6-2')">21</td>
                    </tr>
                    <tr>
                        <td id="0-3"  onclick="clickCalendar('0-3')">22</td>
                        <td id="1-3"  onclick="clickCalendar('1-3')">23</td>
                        <td id="2-3"  onclick="clickCalendar('2-3')">24</td>
                        <td id="3-3"  onclick="clickCalendar('3-3')">25</td>
                        <td id="4-3"  onclick="clickCalendar('4-3')">26</td>
                        <td id="5-3"  onclick="clickCalendar('5-3')">27</td>
                        <td id="6-3"  onclick="clickCalendar('6-3')">28</td>
                    </tr>
                    <tr>
                        <td id="0-4"  onclick="clickCalendar('0-4')">29</td>
                        <td id="1-4"  onclick="clickCalendar('1-4')">30</td>
                        <td id="2-4"  onclick="clickCalendar('2-4')">31</td>
                        <td id="3-4"  onclick="clickCalendar('3-4')">1</td>
                        <td id="4-4"  onclick="clickCalendar('4-4')">2</td>
                        <td id="5-4"  onclick="clickCalendar('5-4')">3</td>
                        <td id="6-4"  onclick="clickCalendar('6-4')">4</td>
                    </tr>
                    <tr>
                        <td id="0-5"  onclick="clickCalendar('0-5')">29</td>
                        <td id="1-5"  onclick="clickCalendar('1-5')">30</td>
                        <td id="2-5"  onclick="clickCalendar('2-5')">31</td>
                        <td id="3-5"  onclick="clickCalendar('3-5')">1</td>
                        <td id="4-5"  onclick="clickCalendar('4-5')">2</td>
                        <td id="5-5"  onclick="clickCalendar('5-5')">3</td>
                        <td id="6-5"  onclick="clickCalendar('6-5')">4</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script>
        loadCalendar();
    </script>
  <!--  <script src="../js/selecter.js"></script> -->
    <script>
        defaultSelecter();
    </script>

</body>
</html>