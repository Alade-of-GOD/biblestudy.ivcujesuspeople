<?php
  require_once('dbconnect.php');
  if (!isset($_GET['next']) || empty($_GET['next']) || $_GET['next'] < 1) $next = 1;
  else $next = $_GET['next'];
  $end = 2;
  $checkend = ($next * $end);
  $page = (($next * $end) - $end);
  $sql = "SELECT * FROM `bible_study_outlines_tbl`
          ORDER BY `listnum` DESC LIMIT $page, $end";
  if(!$result = $dbcon->query($sql)){
    die('There was an error running the query [' . $dbcon->error . ']');
  }
  $next++;
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $t = $row['listnum'];
      $outlinetitle = $row['outlineTitle'];
      $outlinetext = $row['outlineText'];
      $outlinedate = $row['outlineDate'];
      $outlineintro = $row['outlineIntro'];
      $outlinelink = $row['outlineLink'];
      echo '
      <div class="dgt-blog-item dgt-sermon-item  dgt-clear-left">
          <div class="dgt-blog-item-inner">
              <div class="row">
                  <div class="col-sm-10 col-md-10">
                      <div class="dgt-blog-info">
                          <h4 class="dgt-blog-title">
                            <a class="blog-title" href="bible-study-discussion.php?st='.$t.'&serit='.$outlinedate.'&sedit='.$outlinetitle.'" title="'.$outlinetitle.'">'.$outlinetitle.'</a>
                          </h4>
                          <div class="info-post">
                            <span class="dgt-blog-date"><i class="ion-android-calendar"></i>'.$outlinedate.'</span>
                            <span class="dgt-sermon-speaker"><i class="ion-ios-book"></i>'.$outlinetext.'</a></span>
                          </div>
                          <h3>Study Introduction</h3>
                          <div class="dgt-blog-description">'.$outlineintro.'</div>
                          <div class="dgt-blog-readmore">
                            <a href="'.$outlinelink.'" download>Download<i class="ion-ios-download"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      ';
    }
  }
  $count = "SELECT COUNT(`listnum`) FROM `bible_study_outlines_tbl`";
  //$row = $result->fetch_assoc();
  //$count = 6;
  $count = $dbcon->query("SELECT COUNT(`listnum`) as c FROM `bible_study_outlines_tbl`");
  $row = $count->fetch_assoc();
  $count = $row['c'];
  if ($checkend >= $count)
  echo '<div class="dgt-blog-readmore" style="float: right; margin-bottom: 50px; margin-right: 100px">
          <i class="ion-ios-arrow-backward"></i><a href="bible-study-outlines.php?next='.($next-2).'">Previous Page</a>
        </div>';

  else if (($next-2) == 0)
  echo '<div class="dgt-blog-readmore" style="float: right; margin-bottom: 50px; margin-right: 100px">
          <a href="bible-study-outlines.php?next='.($next).'">Next Page<i class="ion-ios-arrow-forward"></i></a>
        </div>';

  else
  echo '
        <div class="dgt-blog-readmore" style="float: right;">
          <a href="bible-study-outlines.php?next='.$next.'">Next Page<i class="ion-ios-arrow-forward"></i></a>
        </div>
        <div class="dgt-blog-readmore" style="margin-bottom: 50px;">
          <i class="ion-ios-arrow-backward"></i><a href="bible-study-outlines.php?next='.($next-2).'">Previous Page</a>
        </div>';

?>
