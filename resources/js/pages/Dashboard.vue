<template>
  <div class="main-page-wrapper">
    <!-- ===================================================
				Loading Transition
			==================================================== -->
    <!-- <div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="images/loader.svg"  alt="" class="m-auto d-block" width="60"></div>
				<div class="txt-loading">
					<span data-text-preloader="NE" class="letters-loading">
						NE
					</span>
					<span data-text-preloader="J" class="letters-loading">
						J
					</span>
					<span data-text-preloader="O" class="letters-loading">
						O
					</span>
					<span data-text-preloader="B" class="letters-loading">
						B
					</span>
					<span data-text-preloader="S" class="letters-loading">
						S
					</span>
				</div>
			</div>
		</div> -->

    <!-- 
		=============================================
				Dashboard Aside Menu
		============================================== 
		-->

    <!-- /.dash-aside-navbar -->

    <!-- 
		=============================================
			Dashboard Body
		============================================== 
		-->
    <div class="dashboard-body">
      <div class="position-relative">
        <!-- ************************ Header **************************** -->
        <header class="dashboard-header">
          <div class="d-flex align-items-center justify-content-end">
            <button class="dash-mobile-nav-toggler d-block d-md-none me-auto">
              <span></span>
            </button>
            <form action="#" class="search-form">
              <input type="text" placeholder="Search here.." />
              <button>
                <img
                  src=""
                  data-src="images/icon/icon_10.svg"
                  alt=""
                  class="lazy-img m-auto"
                />
              </button>
            </form>
            <div class="profile-notification ms-2 ms-md-5 me-4">
              <button
                class="noti-btn dropdown-toggle"
                type="button"
                id="notification-dropdown"
                data-bs-toggle="dropdown"
                data-bs-auto-close="outside"
                aria-expanded="false"
              >
                <img
                  src=""
                  data-src="images/icon/icon_11.svg"
                  alt=""
                  class="lazy-img"
                />
                <div class="badge-pill"></div>
              </button>
              <ul class="dropdown-menu" aria-labelledby="notification-dropdown">
                <li>
                  <h4>Notification</h4>
                  <ul class="style-none notify-list">
                    <li class="d-flex align-items-center unread">
                      <img
                        src=""
                        data-src="images/icon/icon_36.svg"
                        alt=""
                        class="lazy-img icon"
                      />
                      <div class="flex-fill ps-2">
                        <h6>You have 3 new mails</h6>
                        <span class="time">3 hours ago</span>
                      </div>
                    </li>
                    <li class="d-flex align-items-center">
                      <img
                        src=""
                        data-src="images/icon/icon_37.svg"
                        alt=""
                        class="lazy-img icon"
                      />
                      <div class="flex-fill ps-2">
                        <h6>Your job post has been approved</h6>
                        <span class="time">1 day ago</span>
                      </div>
                    </li>
                    <li class="d-flex align-items-center unread">
                      <img
                        src=""
                        data-src="images/icon/icon_38.svg"
                        alt=""
                        class="lazy-img icon"
                      />
                      <div class="flex-fill ps-2">
                        <h6>Your meeting is cancelled</h6>
                        <span class="time">3 days ago</span>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div>
              <!-- <a href="/jobpost" class="job-post-btn tran3s">Post a Job</a> -->

              <Link href="/jobpost" class="job-post-btn tran3s">
                <img
                  data-src="images/icon/icon_2.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>Post a Job</span>
              </Link>
            </div>
          </div>
        </header>
        <!-- End Header -->
        <div v-if="successMessage" class="alert alert-success">
          {{ successMessage }}
        </div>
        <h2 class="main-title">Dashboard</h2>
        <div class="row">
          <div class="col-lg-3 col-6">
            <div
              class="dash-card-one bg-white border-30 position-relative mb-15"
            >
              <div class="d-sm-flex align-items-center justify-content-between">
                <div
                  class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"
                >
                  <img
                    src=""
                    data-src="images/icon/icon_12.svg"
                    alt=""
                    class="lazy-img"
                  />
                </div>
                <div class="order-sm-0">
                  <div class="value fw-500">07</div>
                  <span>Posted Job</span>
                </div>
              </div>
            </div>
            <!-- /.dash-card-one -->
          </div>
          <div class="col-lg-3 col-6">
            <div
              class="dash-card-one bg-white border-30 position-relative mb-15"
            >
              <div class="d-sm-flex align-items-center justify-content-between">
                <div
                  class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"
                >
                  <img
                    src=""
                    data-src="images/icon/icon_13.svg"
                    alt=""
                    class="lazy-img"
                  />
                </div>
                <div class="order-sm-0">
                  <div class="value fw-500">03</div>
                  <span>Shortlisted</span>
                </div>
              </div>
            </div>
            <!-- /.dash-card-one -->
          </div>
          <div class="col-lg-3 col-6">
            <div
              class="dash-card-one bg-white border-30 position-relative mb-15"
            >
              <div class="d-sm-flex align-items-center justify-content-between">
                <div
                  class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"
                >
                  <img
                    src=""
                    data-src="images/icon/icon_14.svg"
                    alt=""
                    class="lazy-img"
                  />
                </div>
                <div class="order-sm-0">
                  <div class="value fw-500">1.7k</div>
                  <span>Application</span>
                </div>
              </div>
            </div>
            <!-- /.dash-card-one -->
          </div>
          <div class="col-lg-3 col-6">
            <div
              class="dash-card-one bg-white border-30 position-relative mb-15"
            >
              <div class="d-sm-flex align-items-center justify-content-between">
                <div
                  class="icon rounded-circle d-flex align-items-center justify-content-center order-sm-1"
                >
                  <img
                    src=""
                    data-src="images/icon/icon_15.svg"
                    alt=""
                    class="lazy-img"
                  />
                </div>
                <div class="order-sm-0">
                  <div class="value fw-500">04</div>
                  <span>Save Candidate</span>
                </div>
              </div>
            </div>
            <!-- /.dash-card-one -->
          </div>
        </div>
        <div class="row d-flex pt-50 lg-pt-10">
          <div class="col-xl-7 col-lg-6 d-flex flex-column">
            <div class="user-activity-chart bg-white border-20 mt-30 h-100">
              <h4 class="dash-title-two">Job Views</h4>
              <div class="d-sm-flex align-items-center job-list">
                <div class="fw-500 pe-3">Jobs:</div>
                <div class="flex-fill xs-mt-10">
                  <select class="nice-select">
                    <option>Web & Mobile Prototype designer....</option>
                    <option>Document Writer</option>
                    <option>Outbound Call Service</option>
                    <option>Product Designer</option>
                  </select>
                </div>
              </div>
              <div class="ps-5 pe-5 mt-50">
                <img
                  src=""
                  data-src="images/main-graph.png"
                  alt=""
                  class="lazy-img m-auto"
                />
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 d-flex">
            <div class="recent-job-tab bg-white border-20 mt-30 w-100">
              <h4 class="dash-title-two">Posted Job</h4>
              <div class="wrapper">
                <div class="job-item-list d-flex align-items-center">
                  <div>
                    <img
                      src=""
                      data-src="../images/logo/media_60.jpg"
                      alt=""
                      class="lazy-img logo"
                    />
                  </div>
                  <div class="job-title">
                    <h6 class="mb-5"><a href="#">Web & Mobile Prototype</a></h6>
                    <div class="meta">
                      <span>Fulltime</span> . <span>Spain</span>
                    </div>
                  </div>
                  <div class="job-action">
                    <button
                      class="action-btn dropdown-toggle"
                      type="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <span></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">View Job</a></li>
                      <li><a class="dropdown-item" href="#">Archive</a></li>
                      <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.job-item-list -->
                <div class="job-item-list d-flex align-items-center">
                  <div>
                    <img
                      src=""
                      data-src="../images/logo/media_59.jpg"
                      alt=""
                      class="lazy-img logo"
                    />
                  </div>
                  <div class="job-title">
                    <h6 class="mb-5"><a href="#">Document Writer</a></h6>
                    <div class="meta">
                      <span>Part-time</span> . <span>Italy</span>
                    </div>
                  </div>
                  <div class="job-action">
                    <button
                      class="action-btn dropdown-toggle"
                      type="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <span></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">View Job</a></li>
                      <li><a class="dropdown-item" href="#">Archive</a></li>
                      <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.job-item-list -->
                <div class="job-item-list d-flex align-items-center">
                  <div>
                    <img
                      src=""
                      data-src="../images/logo/media_58.jpg"
                      alt=""
                      class="lazy-img logo"
                    />
                  </div>
                  <div class="job-title">
                    <h6 class="mb-5"><a href="#">Outbound Call Service</a></h6>
                    <div class="meta">
                      <span>Fulltime</span> . <span>USA</span>
                    </div>
                  </div>
                  <div class="job-action">
                    <button
                      class="action-btn dropdown-toggle"
                      type="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <span></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">View Job</a></li>
                      <li><a class="dropdown-item" href="#">Archive</a></li>
                      <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.job-item-list -->
                <div class="job-item-list d-flex align-items-center">
                  <div>
                    <img
                      src=""
                      data-src="../images/logo/media_57.jpg"
                      alt=""
                      class="lazy-img logo"
                    />
                  </div>
                  <div class="job-title">
                    <h6 class="mb-5"><a href="#">Product Designer</a></h6>
                    <div class="meta">
                      <span>Part-time</span> . <span>Dubai</span>
                    </div>
                  </div>
                  <div class="job-action">
                    <button
                      class="action-btn dropdown-toggle"
                      type="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <span></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">View Job</a></li>
                      <li><a class="dropdown-item" href="#">Archive</a></li>
                      <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.job-item-list -->
                <div class="job-item-list d-flex align-items-center">
                  <div>
                    <img
                      src=""
                      data-src="../images/logo/media_61.jpg"
                      alt=""
                      class="lazy-img logo"
                    />
                  </div>
                  <div class="job-title">
                    <h6 class="mb-5"><a href="#">Marketing Specialist</a></h6>
                    <div class="meta">
                      <span>Part-time</span> . <span>UK</span>
                    </div>
                  </div>
                  <div class="job-action">
                    <button
                      class="action-btn dropdown-toggle"
                      type="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <span></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">View Job</a></li>
                      <li><a class="dropdown-item" href="#">Archive</a></li>
                      <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.job-item-list -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.dashboard-body -->
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="container">
          <div class="remove-account-popup text-center modal-content">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
            <img
              data-src="images/icon/icon_22.svg"
              alt=""
              class="lazy-img m-auto"
            />
            <h2>Are you sure?</h2>
            <p>Are you sure to delete your account? All data will be lost.</p>
            <div
              class="button-group d-inline-flex justify-content-center align-items-center pt-15"
            >
              <a href="#" class="confirm-btn fw-500 tran3s me-3">Yes</a>
              <button
                type="button"
                class="btn-close fw-500 ms-3"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                Cancel
              </button>
            </div>
          </div>
          <!-- /.remove-account-popup -->
        </div>
      </div>
    </div>
    <button class="scroll-top">
      <i class="bi bi-arrow-up-short"></i>
    </button>
  </div>
  <!-- /.main-page-wrapper -->
</template>
<script>
import { Head } from "@inertiajs/inertia-vue3";
import Layout from "@/components/Layout.vue";
import { Link } from "@inertiajs/inertia-vue3";
export default {
  props: {
    successMessage: String,
  },
  setup() {},
  components: {
    Head,
    Link,
    //     Layout,
  },
  layout: Layout,
};
</script>

<style>
/* @import 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css';*/
@import "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css";
@import "https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700&display=swap";
body {
  font-family: "Gordita", "EB Garamond", sans-serif; /* Specify 'Gordita' as the preferred font, fallback to 'EB Garamond' and then generic sans-serif */
}
</style>
