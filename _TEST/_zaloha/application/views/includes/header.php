<div id="header">
          <?php 
            switch ($title) {
              case 'Cleverfrogs domov':
                if($title == "Cleverfrogs company"){ ?>
                <div id="headerLeft">
                    
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk"></a>
                    <a href="<?php echo base_url() ?>en"></a>
                  </div>
                </div>
                <?php
                }else {
                  ?>
                    <div id="headerRight2">
                      <div id="language">
                        <a href="<?php echo base_url() ?>sk">SK</a>
                        |
                        <a href="<?php echo base_url() ?>en">ENG</a>
                      </div>
                    </div>
                  <?php
                }
                break;

                case 'Cleverfrogs spotrebitelia':
                ?>

                <div id="mainHeaderContainer">
                    <h1 class="headerTitle"><?php echo $this->lang->line('whatWeAreDoing'); ?></h1>
                
                <div id="headerLeft">
                    
                  </div>
                  <div id="headerRight">
                    <div id="language">
                      <a href="<?php echo base_url() ?>sk/loadPage/spotrebitelia">SK</a>
                      |
                      <!--end of <a href="<?php echo base_url() ?>en/loadPage/customer">ENG</a>-->
                    </div>
                  </div>
                </div>

                <?php
                break;

                case 'Cleverfrogs customer':
                ?>

                <div id="mainHeaderContainer">
                    <h1 class="headerTitle"><?php echo $this->lang->line('whatWeAreDoing'); ?></h1>
                
                <div id="headerLeft">
                    
                  </div>
                  <div id="headerRight">
                    <div id="language">
                      <a href="<?php echo base_url() ?>sk/loadPage/spotrebitelia">SK</a>
                      |
                      <!--end of <a href="<?php echo base_url() ?>en/loadPage/customer">ENG</a>-->
                    </div>
                  </div>
                </div>

                <?php
                break;

              case 'Cleverfrogs firma':
              ?>

              <div id="mainHeaderContainer">
                  <h1 class="headerTitle"><?php echo $this->lang->line('whatWeAreDoing'); ?></h1>
              
              <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/firma">SK</a>
                    |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/company">ENG</a>-->
                  </div>
                </div>
              </div>

              <?php
                break;

             case 'Cleverfrogs aplikacie':
              ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/aplikacie">SK</a>
                      |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/apps">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;

              case 'Cleverfrogs statistiky':
                ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/statistiky">SK</a>
                    |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/statistics">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;

              case 'Cleverfrogs produkty':
                ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/produkty">SK</a>
                    |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/products">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;

              case 'Cleverfrogs spatna_vazba':
                ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/spatna_vazba">SK</a>
                    |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/give_feedback">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;

                case 'Cleverfrogs FAQsk':
                ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/FAQsk">SK</a>
                    |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/FAQ">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;

                case 'Cleverfrogs kontakt':
                ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/kontakt">SK</a>
                    |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/contact">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;

              default:
                if($title == "Cleverfrogs company"){ ?>
                <div id="headerLeft">
                    
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk">SK</a>
                    |
                    <a href="<?php echo base_url() ?>en">ENG</a>
                  </div>
                </div>
                <?php
                }else {
                  ?>
                    <div id="headerRight2">
                      <div id="language">
                        <a href="<?php echo base_url() ?>sk">SK</a>
                        |
                        <a href="<?php echo base_url() ?>en">ENG</a>
                      </div>
                    </div>
                  <?php
                }
                break;

                case 'Cleverfrogs company':
              ?>

              <div id="mainHeaderContainer">
                  <h1 class="headerTitle"><?php echo $this->lang->line('whatWeAreDoing'); ?></h1>
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/firma">SK</a>
                    |
                    <a href="<?php echo base_url() ?>en/company">ENG</a>
                  </div>
                  
                </div>

              </div>

              <?php
              break;

              case 'Cleverfrogs apps':
              ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/aplikacie">SK</a>
                      |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/apps">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;

              case 'Cleverfrogs statistics':
                ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/statistiky">SK</a>
                    |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/statistics">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;

              case 'Cleverfrogs give_feedback':
                ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/spatna_vazba">SK</a>
                    |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/give_feedback">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;

                case 'Cleverfrogs FAQ':
                ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/FAQsk">SK</a>
                    |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/FAQ">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;

                case 'Cleverfrogs contact':
                ?>

              <div id="mainHeaderContainer">
  
                <div id="headerLeft">
                  
                </div>
                <div id="headerRight">
                  <div id="language">
                    <a href="<?php echo base_url() ?>sk/loadPage/kontakt">SK</a>
                    |
                    <!--end of <a href="<?php echo base_url() ?>en/loadPage/contact">ENG</a>-->
                  </div>
                </div>

              </div>

              <?php
                break;
                
            }
          ?>
        </div><!-- end of header-->