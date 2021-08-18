<?php
  include "component/header.php"
 ?>
    <header class="archive">
      <?php
        include "component/nav.php"
       ?>
      <div class="content">
        <h2>SEARCH</h2>
      </div>
      <div class="filter">
        <div class="numberSelect">
          <div>
            <span>Guest Reviews</span>
            <!-- insert icon -->
          </div>
          <div>
            <span>Stay Price</span>
            <!-- insert icon -->
          </div>
          <div>
            <span>Room Size</span>
            <!-- insert icon -->
          </div>
        </div>
        <div class="iconList">
          <!-- insert icon -->
          <!-- insert icon -->
          <!-- insert icon -->
        </div>
      </div>
    </header>
    <div class="main archive">
      <div class="filteroptions">
          <div class="numfilter">
            <div class="numcontainer">
              <span>All Branches</span>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="nums">
              <div class="numcontainer">
                <h3>check-in</h3>
                <div class="date">
                  <em>26</em>
                  <div class="monthselect">
                    <span>Jun</span>
                    <i class="fas fa-chevron-down"></i>
                  </div>
                </div>
              </div>
              <div class="numcontainer">
                <h3>check-out</h3>
                <div class="date">
                  <em>28</em>
                  <div class="monthselect">
                    <span>Jun</span>
                    <i class="fas fa-chevron-down"></i>
                  </div>
                </div>
              </div>
              <div class="numcontainer">
                <h3>guests</h3>
                <div class="selectguestnum">
                  <em>1</em>
                  <div class="updownchevron">

                  </div>
                </div>
              </div>
              <div class="numcontainer">
                <h3>nights</h3>
                <em>2</em>
              </div>
            </div>
          </div>
          <div class="servicefilter">
            <h3>Services</h3>
            <form class="tickoptions">
              <input type="checkbox" name="" value=""><span>Animal Allowed</span>
              <input type="checkbox" name="" value=""><span>Animal Allowed</span>
              <input type="checkbox" name="" value=""><span>Animal Allowed</span>
              <input type="checkbox" name="" value=""><span>Animal Allowed</span>
              <input type="checkbox" name="" value=""><span>Animal Allowed</span>
              <input type="checkbox" name="" value=""><span>Animal Allowed</span>
            </form>
          </div>
          <div class="sizefilter closed">
            <h3>Room Size</h3>
          </div>
          <div class="extrasvcfilter closed">
            <h3>Extra Services</h3>
          </div>
          <div class="numreview">
            <h3>Reviews</h3>

            <?php
              for ($i=0; ; $i+=2) {
                if ($i > 10) {
                  break;
                };
                print_r("
                <div class=\"numcontainer\">
                  <h3>{$i}</h3>
                </div>
                ");
              }
            ?>
          </div>
          <div class="starreview">
            <h3>Branch Stars</h3>
          </div>
      </div>
      <div class="cardList">
        <?php
          for ($i=0; $i < 4; $i++) {
            echo "<div class=\"card\">
              <div class=\"img\">
                <img src=\"\" alt=\"\">
              </div>
              <div class=\"text\">
                <h4>Family Room</h4>
                <div class=\"roomratings\">
                  <span>5 Reviews</span><span>3 Guests</span><span>25M²</span>
                </div>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis laboriosam sequi culpa consectetur unde, in molestiae blanditiis illo nesciunt, ab dolorum consequatur itaque quam! Debitis!</span>
                <button class=\"read\">Book for XXX$</button>
              </div>
            </div>";
          };
         ?>
      </div>
    </div>

  <?php
    include "component/footer.php"
   ?>
