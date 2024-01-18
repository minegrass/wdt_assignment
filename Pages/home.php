<?php
$PageTitle = "Charity Hub - Home";

function customPageHeader()
{
    echo "
    <link rel='stylesheet' type='text/css' href='Styles/home.css'>
    <link rel='stylesheet' type='text/css' href='Styles/bannerSection.css'>
    <link rel='stylesheet' type='text/css' href='Styles/eventCard.css'>
    <link rel='stylesheet' type='text/css' href='Styles/eventList.css'>
    
    ";
};


include_once("Includes/header.php");
include_once("Includes/bannerSection.php");
include_once("Includes/eventCard.php");

$result = mysqli_query($conn, "SELECT COUNT(*) AS totalPeople FROM user");
$row = mysqli_fetch_assoc($result);
$totalPeople = $row['totalPeople'];

$result = mysqli_query($conn, "SELECT COUNT(*) AS totalEvents FROM event");
$row = mysqli_fetch_assoc($result);
$totalEvents = $row['totalEvents'];

$result = mysqli_query($conn, "SELECT * FROM event ORDER BY eventid DESC LIMIT 15");
$eventList = mysqli_fetch_all($result, MYSQLI_ASSOC);

include_once("Includes/navbar.php");

?>

<div>

    <div>
        <?php bannerSection($totalPeople) ?>
    </div>
    <div class="event-section-div">
        <?php


        ?>
        <!-- event card section -->
        <div class="eventlist-title">
            <h1>
                Currently <a class="eventlist-text-hot" href="#">Hot</a> Events
                <a class="eventlist-text-near" href="#">
                    near you
                </a>
            </h1>

        </div>
        <div class="eventlist-div">
            <?php
            foreach ($eventList as $event) {
                eventCard($event['title'], $event['desc_short'], "https://picsum.photos/200/300", "wdt_assignment-main/index.php?page=event&eventid=" . $event['eventid']);
            }
            ?>



        </div>
        <div class="eventlist-circle-div">
            <div>
                <div class="eventlist-circle eventlist-circle-active"></div>
                <div class="eventlist-circle"></div>
                <div class="eventlist-circle"></div>

            </div>

        </div>
        <a href="#" class="eventlist-more ">View More</a>

    </div>
    <div>
        <!-- about us section -->
    </div>
    <div>
        <!-- earth section -->
    </div>
    <div id="leaderboard">
        <!-- leaderboard section -->
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, architecto. Vero nesciunt quaerat id omnis aliquam perferendis consequuntur deserunt odit beatae minus. Doloribus, aliquam cumque molestias reprehenderit repellat ipsa quidem itaque odio explicabo, earum, ipsam quibusdam? Consequatur error quisquam, ex asperiores sequi corporis magnam voluptate, in, sit odit voluptatum laboriosam? Eos, neque. Eveniet consequatur minima molestiae quisquam vero, eligendi neque inventore laborum omnis reiciendis. Odio culpa temporibus quasi non voluptates placeat accusamus consequuntur quaerat impedit ut soluta reprehenderit id vero, explicabo quos et voluptatibus rerum, autem assumenda deserunt? Rerum, quasi atque accusantium ullam sed blanditiis, excepturi autem ipsa necessitatibus nemo alias nostrum commodi? Earum repellendus tempora saepe rerum at! Pariatur et at adipisci, ipsum delectus odio nam commodi reprehenderit perspiciatis corrupti recusandae esse magni, rerum ipsam eaque quia facilis ducimus, in laudantium tempore officiis repudiandae. Culpa sequi modi, iusto ea rem tempore molestiae optio tempora accusantium, sit minus possimus quaerat obcaecati? Eaque culpa quis itaque ipsa fuga, accusantium quam esse tenetur. Eveniet velit optio odit cupiditate nulla facilis deserunt atque, magni ipsum, saepe ad dicta sequi fuga minus aliquid enim dolore unde sunt animi quisquam labore suscipit at quidem. Vitae modi laudantium corporis nisi voluptatem hic porro neque consequuntur quo eos unde exercitationem reiciendis aliquam, provident asperiores nam consectetur consequatur, autem eum vero, error assumenda ipsum facere! Voluptatum eveniet maxime unde obcaecati dolore, qui minima. Maxime numquam sequi totam, facilis nam dignissimos nobis at saepe voluptas! Asperiores, itaque quis quidem architecto voluptatibus voluptatum nam, doloribus ipsa eaque culpa neque sunt. Hic quod commodi ad quo facere cupiditate earum! Id corrupti odio aliquam doloribus incidunt laborum. Quidem, officia repellat sapiente consequuntur sed nam ea asperiores? Fugit, quod magnam? Exercitationem atque voluptatem qui asperiores modi veritatis aspernatur aut est quia dolor omnis eos recusandae assumenda eius perferendis, vitae consequatur officia quae corrupti nulla. Autem placeat nostrum recusandae illum ullam cupiditate, atque porro ipsam magnam tenetur. Facilis rem sapiente corrupti numquam corporis dicta, debitis reiciendis voluptate culpa porro quos dolore enim nulla et obcaecati, reprehenderit a accusantium? Sit ut laborum nihil natus voluptatibus. Beatae quas esse ex veniam impedit nobis odit, nisi necessitatibus libero porro ipsam laboriosam quidem suscipit, facilis aliquid nulla corporis temporibus nostrum, laudantium delectus commodi voluptatem rerum. Saepe laborum quisquam illum a, perferendis ex accusamus quo soluta cumque nobis exercitationem optio molestiae placeat rerum voluptate explicabo praesentium quidem dolore sequi impedit quaerat voluptatem. Soluta minus quaerat quia veritatis obcaecati quae earum dignissimos sunt, sit nulla consequuntur suscipit mollitia distinctio similique id dolores? Minus, eum dolorum aspernatur corrupti rem omnis reiciendis porro ab culpa, sapiente rerum! Obcaecati, libero. Itaque, voluptates id voluptatibus earum sunt repudiandae rem, consectetur optio, hic suscipit totam illo corrupti sit temporibus neque omnis expedita iste repellendus quis. Tempora magni voluptatum labore sunt ut recusandae consequuntur itaque aliquam quo quasi modi, exercitationem nisi, maiores nihil est dolorem a quidem doloremque quos reiciendis laborum eveniet voluptate quas autem. Architecto at, natus, harum atque repellendus dolorum quo culpa pariatur, ullam alias rem. Laborum dolore fugit perspiciatis nemo laboriosam? Error possimus consequuntur eum neque quia ea libero qui placeat odio quidem dignissimos animi totam praesentium odit temporibus voluptatem aspernatur quibusdam quos, atque officiis sed nobis iusto voluptatum quo! Laboriosam possimus temporibus est dolore totam voluptatibus esse, et facere. Iste recusandae doloremque possimus quasi ipsa perferendis. Commodi excepturi voluptatem quia nostrum ducimus necessitatibus pariatur quibusdam atque hic optio illo suscipit dolorum voluptatibus at nesciunt quis maxime, eaque velit facere esse, eius vel! Voluptas rem dolorum nobis magnam quo earum cum eius incidunt, in asperiores accusamus qui laboriosam vitae, ullam nihil harum velit labore ex non? Atque adipisci iste repellendus rerum fugit consectetur praesentium, accusamus eum aspernatur accusantium officia nobis odio distinctio, nihil, soluta exercitationem deleniti nam ullam blanditiis neque est harum consequatur? Similique pariatur, qui facilis ea dolore blanditiis nesciunt inventore aliquid. Aut expedita vitae aliquid facere distinctio architecto magni, mollitia soluta possimus! Placeat, nobis assumenda facilis doloremque eveniet consequuntur perferendis! Ipsum beatae cum sapiente obcaecati nulla deserunt, fugiat, illo maxime porro commodi vitae cumque non, vero architecto omnis in nemo voluptatibus aliquam necessitatibus? Consequuntur tenetur, eligendi ut itaque aut mollitia, ex adipisci eveniet eos accusamus molestias quis aperiam rerum illum debitis natus! Eligendi officiis labore temporibus, alias consequatur pariatur, eveniet placeat asperiores earum tenetur sit! Commodi recusandae rem illum temporibus esse optio, perferendis sapiente. Rem cum eveniet exercitationem impedit corrupti optio id, perspiciatis obcaecati, atque suscipit nihil explicabo dicta eius! Neque nobis quaerat ex error reprehenderit atque beatae eaque quisquam doloremque impedit iure ea exercitationem odio possimus pariatur sunt, laborum mollitia distinctio illum iusto eos tempora aut! Minima, odio. Enim numquam assumenda nihil quis fuga ex voluptatem sequi dolorum libero eius deserunt, reprehenderit atque quos perferendis voluptatum fugit saepe hic quam possimus temporibus. Sit dolore dolores perferendis fuga tempora reprehenderit nihil necessitatibus ratione doloremque nisi consectetur odit repudiandae illo laborum a quasi officia facere corrupti animi molestiae, esse vitae qui eveniet! Fugit laudantium magni quasi, soluta laborum mollitia sapiente fuga, asperiores ullam, iste aperiam temporibus. Eos tempora saepe perferendis aliquid! Enim autem praesentium asperiores nobis, tempore a earum aspernatur, commodi ipsum cumque ab similique aliquid ad quo expedita molestiae dolorem perferendis natus quas nisi sint. Nihil recusandae voluptatem nulla consequatur animi cupiditate officia ex quaerat, similique quasi consequuntur nemo nisi, iste earum nobis. Minus laborum autem maiores quam tempore id suscipit repellendus, perspiciatis maxime iste voluptatibus, odit deserunt itaque inventore velit possimus! Alias inventore, minus aspernatur enim facilis sunt non minima eveniet. Facere eveniet saepe eos aperiam quibusdam quia voluptatem repellendus, consectetur quis dolor ipsa ullam facilis reprehenderit ipsum asperiores explicabo in quasi cumque accusantium necessitatibus illo officiis voluptas quos? Quaerat architecto asperiores odit maxime repellat natus perferendis quo inventore sed voluptatum autem molestiae reiciendis, nobis, deleniti hic nam libero, expedita voluptates numquam quisquam consectetur eius sapiente saepe. Rem dignissimos recusandae quo odio placeat molestiae tempora fuga, modi delectus? Impedit quis vero odit. Illum sint officia, non nobis veniam assumenda ad doloremque est dolore autem aperiam quas dolorem velit modi rerum, doloribus corrupti porro accusamus earum ipsam. Expedita similique non ratione?
    </div>

</div>