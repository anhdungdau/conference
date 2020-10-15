<?php include('../include/session.php'); ?>

    <!DOCTYPE html>
    <html>
    <?php include('../include/header.php'); ?>

        <body>
            <?php include('../include/navbar.php'); ?>
                <h1>Welcome to the Australian Financial Pathways Conference (AFPC)</h1>
                <br>
                <br>
                <div class="container">

                    <button onclick="location.href='../content/showPresentations.php'" type="button" class="btn btn-primary btn-md">Presentations List</button>
                    <br><br>
                    <button onclick="location.href='../content/showTopics.php'" type="button" class="btn btn-primary btn-md">Topics List</button>
                    <br><br>
                    <button onclick="location.href='../content/showSpeakers.php'" type="button" class="btn btn-primary btn-md">Speakers List</button>
                    <br><br>
                    <button onclick="location.href='../content/showVenues.php'" type="button" class="btn btn-primary btn-md">Venues List</button>
                    <br><br>
                    <button onclick="location.href='../content/showAttendees.php'" type="button" class="btn btn-primary btn-md">Attendees List</button>
                </div>
        </body>

    </html>
