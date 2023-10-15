<!DOCTYPE html>

<html lang = "eng">
    <head>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="jquery-3.7.1.min.js"></script>
        <script type="text/javascript"></script>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="myStyling.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="images/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

    <title>Events</title>
    </head>

    <body class="body_style dark">
        <ul class="nav nav-pills nav-fill dark">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="events.php">Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="celebrities.php">Celebrities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="animals-facts-page.php">Fun Facts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donations.php">Donations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacts.php">Contacts</a>
            </li>
        </ul>
        <header class="banner-picture">
            <h1 class="banner-header dark">
            The Zoos of the World
            </h1>
        </header>
        <div id="wrapper">
            <main id = "main_page">
                <h3 class="intro-caption dark">
                    <strong>Events</strong>
                </h3>
                    <div class="event-schedule-area-two bg-color pad100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="nav custom-tab dark" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="home-taThursday" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">San Diego</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="chester-tab" data-toggle="tab" href="#chester" role="tab" aria-controls="chester" aria-selected="false">Chester</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="lincoln-park-tab" data-toggle="tab" href="#lincoln-park" role="tab" aria-controls="lincoln-park" aria-selected="false">Lincoln Park</a>
                                        </li>
                                        <li class="nav-item d-none d-lg-block">
                                            <a class="nav-link" id="toronto-tab" data-toggle="tab" href="#toronto" role="tab" aria-controls="toronto" aria-selected="false">Toronto</a>
                                        </li>
                                        <li class="nav-item mr-0 d-none d-lg-block">
                                            <a class="nav-link" id="singapore-tab" data-toggle="tab" href="#singapore" role="tab" aria-controls="singapore" aria-selected="false">Singapore</a>
                                        </li>
                                        <li class="nav-item mr-0 d-none d-lg-block">
                                            <a class="nav-link" id="bronx-tab" data-toggle="tab" href="#bronx" role="tab" aria-controls="bronx" aria-selected="false">Bronx</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="home" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" scope="col">Date</th>=
                                                            <th scope="col"> </th>
                                                            <th scope="col"> Event</th>
                                                            <th scope="col">Location</th>
                                                            <th class="text-center" scope="col">Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="inner-box">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>17</span>
                                                                    <p>November</p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="https://zoo.sandiegozoo.org/sites/default/files/styles/landing_page_view_thumbnail/public/2021-10/botanical_tours_thumb.jpg?h=0894a192&itok=2zQfFvNb" width="540" height="540" alt=""/>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="event-wrap">
                                                                    <h3>Botanical Tours</h3>
                                                                    <div class="meta">
                                                                        <div class="time">
                                                                            <span>10:00 AM - 02:00 PM 4h</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="r-no">
                                                                    <span><a target="_blank" href="https://maps.app.goo.gl/Z34VnBQGrERwT3x36">2920 Zoo Dr, San Diego, CA 92101</a></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="primary-btn">
                                                                    <a class="btn btn-primary" target="_blank" href="https://zoo.sandiegozoo.org/activities/botanical-tours">Book Now!</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="inner-box">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>Daily</span>
                                                                    <p></p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="https://zoo.sandiegozoo.org/sites/default/files/styles/landing_page_view_thumbnail/public/2021-10/4D_theater_thumb_0.jpg?h=0894a192&itok=7EIKLXTD" width="540" height="540" alt="" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="event-wrap">
                                                                <h3>4D Theater</h3>
                                                                <div class="meta">
                                                                    <div class="time">
                                                                        <span>10:30 AM - 08:00 PM 1h</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                                <div class="r-no">
                                                                    <span><a target="_blank" href="https://maps.app.goo.gl/Z34VnBQGrERwT3x36">2920 Zoo Dr, San Diego, CA 92101</a></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="primary-btn">
                                                                    <a class="btn btn-primary" target="_blank" href="https://zoo.sandiegozoo.org/activities/4d-theater">Book Now!</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="inner-box border-bottom-0">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>Daily</span>
                                                                    <p></p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="https://zoo.sandiegozoo.org/sites/default/files/styles/landing_page_view_thumbnail/public/2021-10/bus_tour_thumb_0.jpg?h=0894a192&itok=-FzDesMK" width="540" height="540" alt="" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="event-wrap">
                                                                <h3>Guided Bus Tour</h3>
                                                                <div class="meta">
                                                                    <div class="time">
                                                                        <span>90:00 AM - 09:00 PM 35'</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                                <div class="r-no">
                                                                    <span><a target="_blank" href="https://maps.app.goo.gl/Z34VnBQGrERwT3x36">2920 Zoo Dr, San Diego, CA 92101</a></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="primary-btn">
                                                                    <a class="btn btn-primary" target="_blank" href="https://zoo.sandiegozoo.org/activities/botanical-tours">Book Now!</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="chester" role="tabpanel" aria-labelledby="chester-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Date</th>
                                                            <th scope="col"> </th>
                                                            <th scope="col"> Event</th>
                                                            <th scope="col">Location</th>
                                                            <th scope="col">Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="inner-box">
                                                        <th scope="row">
                                                            <div class="event-date">
                                                                <span>5</span>
                                                                <p>November</p>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="event-img">
                                                                <img src="https://www.chesterzoo.org/app/uploads/2019/04/aquarium-fish-at-the-zoo-whats-here-desktop-6-500x302.jpg" width="540" height="540" alt="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="event-wrap">
                                                            <h3>Junior Ranger Camp</h3>
                                                            <div class="meta">
                                                                <div class="time">
                                                                    <span>10:30 AM - 12:00 PM 1h 30'</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </td>
                                                        <td>
                                                            <div class="r-no">
                                                                <span><a target="_blank" href="https://maps.app.goo.gl/nLcCDt36NnEN3NGW7">Chester CH2 1LE, United Kingdom</a></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                                <a class="btn btn-primary" target="_blank" href="https://www.chesterzoo.org/events/junior-ranger-camp-under-the-water/">Book Now!</a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="inner-box">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>27</span>
                                                                    <p>November</p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="https://www.chesterzoo.org/app/uploads/2022/04/2003_CZ_ZR_MC_006_Memory-Cafe-500x375.jpg" width="540" height="540" alt=""/>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="event-wrap">
                                                                    <h3>Memory Cafe</h3>
                                                                    <div class="meta">
                                                                        <div class="time">
                                                                            <span>10:30 AM - 12:00 PM 1h 30'</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="r-no">
                                                                    <span><a target="_blank" href="https://maps.app.goo.gl/nLcCDt36NnEN3NGW7">Chester CH2 1LE, United Kingdom</a></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="primary-btn">
                                                                    <a class="btn btn-primary" target="_blank" href="https://www.chesterzoo.org/events/chester-zoo-memory-cafe/">Book Now!</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="inner-box border-bottom-0">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>13</span>
                                                                    <p>December</p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="https://www.chesterzoo.org/app/uploads/2021/05/Little-Tots-morning-desktop-500x292.jpg" width="540" height="540" alt="" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="event-wrap">
                                                                <h3>Festive Zoo Tots</h3>
                                                                <div class="meta">
                                                                    <div class="time">
                                                                        <span>9:00 AM - 09:00 PM All Day</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                            <div class="r-no">
                                                                <span><a target="_blank" href="https://maps.app.goo.gl/nLcCDt36NnEN3NGW7">Chester CH2 1LE, United Kingdom</a></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                                <a class="btn btn-primary" target="_blank" href="https://www.chesterzoo.org/events/festive-zoo-tots/">Book Now!</a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lincoln-park" role="tabpanel" aria-labelledby="lincoln-park-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Date</th>
                                                            <th scope="col"> </th>
                                                            <th scope="col"> Event</th>
                                                            <th scope="col">Location</th>
                                                            <th scope="col">Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="inner-box">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>9</span>
                                                                    <p>October</p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="images/fall_fest.png" width="540" height="540" alt=""/>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="event-wrap">
                                                                    <h3>Fall Fest</h3>
                                                                    <div class="meta">
                                                                        <div class="time">
                                                                            <span>10:00 AM - 05:00 PM 7h</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="r-no">
                                                                    <span><a target="_blank" href="https://maps.app.goo.gl/o3NVs2VV4jWCKeQf7">Chicago, IL 60614</a></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="primary-btn">
                                                                    <a class="btn btn-primary" target="_blank" href="https://www.lpzoo.org/event/fall-fest/">Book Now!</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="inner-box">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>26</span>
                                                                    <p>October</p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="images/howl-o-ween.png" width="540" height="540" alt="" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="event-wrap">
                                                                <h3>Howl-o-ween</h3>
                                                                <div class="meta">
                                                                    <div class="time">
                                                                        <span>6:30 PM - 10:00 PM 3h 30'</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                            <div class="r-no">
                                                                <span><a target="_blank" href="https://maps.app.goo.gl/o3NVs2VV4jWCKeQf7">Chicago, IL 60614</a></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                                <a class="btn btn-primary" target="_blank" href="https://www.lpzoo.org/event/adults-night-out-howl-o-ween/">Book Now!</a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="inner-box border-bottom-0">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>17</span>
                                                                    <p>November</p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="images/zoo_lights.png" width="540" height="540" alt="" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="event-wrap">
                                                                <h3>ZooLights</h3>
                                                                <div class="meta">
                                                                    <div class="time">
                                                                        <span>7:00 PM - 09:00 PM 2h</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                            <div class="r-no">
                                                                <span><a target="_blank" href="https://maps.app.goo.gl/o3NVs2VV4jWCKeQf7">Chicago, IL 60614</a></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                                <a class="btn btn-primary" target="_blank" href="https://www.lpzoo.org/event/zoolights/">Book Now!</a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="toronto" role="tabpanel" aria-labelledby="toronto-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Date</th>
                                                            <th scope="col"> </th>
                                                            <th scope="col"> Event</th>
                                                            <th scope="col">Location</th>
                                                            <th scope="col">Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="inner-box">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>21</span>
                                                                    <p>October</p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="images/boo_at_the_zoo.png" width="540" height="540" alt=""/>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="event-wrap">
                                                                    <h3>Boo at the Zoo</h3>
                                                                    <div class="meta">
                                                                        <div class="time">
                                                                            <span>06:00 PM - 09:00 PM 3h</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="r-no">
                                                                    <span><a target="_blank" href="https://maps.app.goo.gl/JvcniV3niK8q8w2w8">2000 Meadowvale Rd, Toronto, ON M1B 5K7, Canada</a></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="primary-btn">
                                                                    <a class="btn btn-primary" target="_blank" href="https://www.torontozoo.com/events/boo#evt">Book Now!</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="inner-box">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>26</span>
                                                                    <p>October</p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="images/nocturnal_neighbours.png" width="540" height="540" alt="" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="event-wrap">
                                                                <h3>Nocturnal Neighbors</h3>
                                                                <div class="meta">
                                                                    <div class="time">
                                                                        <span>01:00 PM - 04:30 PM 3h 30'</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                            <div class="r-no">
                                                                <span><a target="_blank" href="https://maps.app.goo.gl/JvcniV3niK8q8w2w8">2000 Meadowvale Rd, Toronto, ON M1B 5K7, Canada</a></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                                <a class="btn btn-primary" target="_blank" href="https://www.torontozoo.com/events/neighbours#evt">Book Now!</a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="inner-box border-bottom-0">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>27</span>
                                                                    <p>October</p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="images/wolf_howl.png" width="540" height="540" alt="" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="event-wrap">
                                                                <h3>Wold Howl</h3>
                                                                <div class="meta">
                                                                    <div class="time">
                                                                        <span>06:30 PM - 08:00 PM 1h 30'</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                            <div class="r-no">
                                                                <span><a target="_blank" href="https://maps.app.goo.gl/JvcniV3niK8q8w2w8">2000 Meadowvale Rd, Toronto, ON M1B 5K7, Canada</a></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                                <a class="btn btn-primary" target="_blank" href="https://www.torontozoo.com/events/wolfhowl#evt">Book Now!</a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="singapore" role="tabpanel" aria-labelledby="singapore-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Date</th>
                                                            <th scope="col"> </th>
                                                            <th scope="col"> Event</th>
                                                            <th scope="col">Location</th>
                                                            <th scope="col">Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="inner-box">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>27</span>
                                                                    <p>May</p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="images/zoobilee.png" width="540" height="540" alt=""/>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="event-wrap">
                                                                    <h3>ZOObilee</h3>
                                                                    <div class="meta">
                                                                        <div class="time">
                                                                            <span>All Day</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="r-no">
                                                                    <span><a target="_blank" href="https://maps.app.goo.gl/jkmMZd1auSSNTjmb6">80 Mandai Lake Rd, Singapore 729826</a></span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="primary-btn">
                                                                    <a class="btn btn-primary" target="_blank" href="https://www.mandai.com/en/singapore-zoo/things-to-do/whats-on/sz50.html">Book Now!</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="inner-box">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>Daily</span>
                                                                    <p></p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="images/breakfast_in_the_wild.png" width="540" height="540" alt="" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="event-wrap">
                                                                    <h3>Breakfast in the Wild</h3>
                                                                    <div class="meta">
                                                                        <div class="time">
                                                                            <span>09:00 AM - 10:30 PM 1h 30'</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="r-no">
                                                                <span><a target="_blank" href="https://maps.app.goo.gl/jkmMZd1auSSNTjmb6">80 Mandai Lake Rd, Singapore 729826<</a></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                                <a class="btn btn-primary" target="_blank" href="https://www.mandai.com/en/singapore-zoo/things-to-do/dining/breakfast-in-the-wild.html">Book Now!</a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        <tr class="inner-box border-bottom-0">
                                                            <th scope="row">
                                                                <div class="event-date">
                                                                    <span>Daily</span>
                                                                    <p></p>
                                                                </div>
                                                            </th>
                                                            <td>
                                                                <div class="event-img">
                                                                    <img src="images/wild_about_you.png" width="540" height="540" alt="" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="event-wrap">
                                                                <h3>Wild About You</h3>
                                                                <div class="meta">
                                                                    <div class="time">
                                                                        <span>All Day</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                            <div class="r-no">
                                                                <span><a target="_blank" href="https://maps.app.goo.gl/jkmMZd1auSSNTjmb6">80 Mandai Lake Rd, Singapore 729826<</a></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                                <a class="btn btn-primary" target="_blank" href="https://www.mandai.com/en/wild-about-you.html">Book Now!</a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="bronx" role="tabpanel" aria-labelledby="bronx-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Date</th>
                                                            <th scope="col"> </th>
                                                            <th scope="col"> Event</th>
                                                            <th scope="col">Location</th>
                                                            <th scope="col">Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="inner-box">
                                                        <th scope="row">
                                                            <div class="event-date">
                                                                <span>29</span>
                                                                <p>October</p>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="event-img">
                                                                <img src="images/pumkin_nights.png" width="540" height="540" alt=""/>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="event-wrap">
                                                                <h3>Pumpkin Nights</h3>
                                                                <div class="meta">
                                                                    <div class="time">
                                                                        <span>06:00 PM - 09:00 PM 3h</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="r-no">
                                                                <span><a target="_blank" href="https://maps.app.goo.gl/ahJydC82ZMaydSCo9">2300 Southern Blvd, Bronx, NY 10460</a></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                                <a class="btn btn-primary" target="_blank" href="https://bronxzoo.com/pumpkin-nights">Book Now!</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="inner-box">
                                                        <th scope="row">
                                                            <div class="event-date">
                                                                <span>29</span>
                                                                <p>October</p>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="event-img">
                                                                <img src="images/boo_at_the_zoo_bronx.png" width="540" height="540" alt="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="event-wrap">
                                                            <h3>Boo at the Zoo</h3>
                                                            <div class="meta">
                                                                <div class="time">
                                                                    <span>All Day</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </td>
                                                        <td>
                                                            <div class="r-no">
                                                                <span><a target="_blank" href="https://maps.app.goo.gl/ahJydC82ZMaydSCo9">2300 Southern Blvd, Bronx, NY 10460</a></span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                                <a class="btn btn-primary" target="_blank" href="https://bronxzoo.com/boo-at-the-zoo">Book Now!</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="inner-box border-bottom-0">
                                                        <th scope="row">
                                                            <div class="event-date">
                                                                <span>17</span>
                                                                <p>November</p>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="event-img">
                                                                <img src="images/holiday_lights.png" width="540" height="540" alt="" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="event-wrap">
                                                            <h3>Holiday Lights</h3>
                                                            <div class="meta">
                                                                <div class="time">
                                                                    <span>All Day</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </td>
                                                        <td>
                                                            <div class="r-no">
                                                            <span><a target="_blank" href="https://maps.app.goo.gl/ahJydC82ZMaydSCo9">2300 Southern Blvd, Bronx, NY 10460</a></span>
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <div class="primary-btn">
                                                            <a class="btn btn-primary" target="_blank" href="https://bronxzoo.com/holiday-lights">Book Now!</a>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- /col end-->
                        </div>
                            <!-- /row end-->
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>