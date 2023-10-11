<div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
            <?php foreach ($data_menu as $row) : ?>
              <ul class="navbar-nav">
                <li class="nav-item <!--<?=$row->status ?>-->">
                  <a class="nav-link" href="<?= base_url(), $row->link; ?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <!-- <i class="<?= $row->icon ?>"></i> -->
                    </span>
                    <span class="nav-link-title">
                    <i class="<?= $row->icon ?>"></i> <?= $row->menu ?>
                    </span>
                  </a>
                </li>
              </ul>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </header>