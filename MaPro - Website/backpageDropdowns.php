<script src="js/dropdowns.js"></script>



<!-- Dropdowns  -->
<div class="container row center">
    <div class="col s2"></div>


    <div class="col s3 zoom">
        <a class='dropdown-trigger btn-large blueDeepBackground' href='#' data-target='dropdownDisplay' style="background:#213B6B">
            <i class="material-icons left">view_list</i>Display
        </a>

        <!-- Dropdown Display -->
        <ul id='dropdownDisplay' class='dropdown-content'>
            <li><a href="#!" id="bigCard" onclick="bigCards()"><i class="material-icons">sim_card_alert</i> Big Cards</a></li>
            <li><a href="#!" id="smallCard" onclick="smallCards()"><i class="material-icons">sim_card_alert</i> Small Cards</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a href="#!" id="listShow" onclick="listShow()"><i class="material-icons">view_list</i> List</a></li>
        </ul>
    </div>


    <div class="col s2"></div>


    <div class="col s3 zoom">
        <a class='dropdown-trigger btn-large blueLightBackground' href='#' data-target='dropdownSearch' style="background:#213B6B">
            <i class="material-icons left">search</i>Search by
        </a>

        <!-- Dropdown Search -->
        <ul id='dropdownSearch' class='dropdown-content'>
            <li><a href="#!"><i class="material-icons">title</i>Title</a></li>
            <li><a href="#!"><i class="material-icons">report</i>Priority</a></li>
            <li><a href="#!"><i class="material-icons">timeline</i>Completion</a></li>
            <li><a href="#!"><i class="material-icons">supervisor_account</i>Leader</a></li>
        </ul>
    </div>
    

    <div class="col s2"></div>
</div>


<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('.dropdown-trigger').dropdown();
    });
</script>

<style>
    .dropdown-content
    {
        color:#213B6B;
        z-index: 1;
    }
</style>