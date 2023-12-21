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
            <!-- <form action="#" class="search-form"> -->
            <input type="text" placeholder="Search here.." />
            <button><img src="" data-src="images/icon/icon_10.svg" alt="" class="lazy-img m-auto" /></button>
            <!-- </form> -->
            <div class="profile-notification ms-2 ms-md-5 me-4">
              <button class="noti-btn dropdown-toggle" type="button" id="notification-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                <img src="" data-src="images/icon/icon_11.svg" alt="" class="lazy-img" />
                <div class="badge-pill"></div>
              </button>
              <ul class="dropdown-menu" aria-labelledby="notification-dropdown">
                <li>
                  <h4>Notification</h4>
                  <ul class="style-none notify-list">
                    <li class="d-flex align-items-center unread">
                      <img src="" data-src="images/icon/icon_36.svg" alt="" class="lazy-img icon" />
                      <div class="flex-fill ps-2">
                        <h6>You have 3 new mails</h6>
                        <span class="time">3 hours ago</span>
                      </div>
                    </li>
                    <li class="d-flex align-items-center">
                      <img src="" data-src="images/icon/icon_37.svg" alt="" class="lazy-img icon" />
                      <div class="flex-fill ps-2">
                        <h6>Your job post has been approved</h6>
                        <span class="time">1 day ago</span>
                      </div>
                    </li>
                    <li class="d-flex align-items-center unread">
                      <img src="" data-src="images/icon/icon_38.svg" alt="" class="lazy-img icon" />
                      <div class="flex-fill ps-2">
                        <h6>Your meeting is cancelled</h6>
                        <span class="time">3 days ago</span>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div><a href="employer-dashboard-submit-job.html" class="job-post-btn tran3s">Post a Job</a></div>
          </div>
        </header>
        <!-- End Header -->

        <h2 class="main-title">My Jobs</h2>
        <form @submit.prevent="jobstore">
          <text-input v-model="form.authUserId" class="mt-10" id="authUserId" type="hidden" autofocus autocapitalize="off" />

          <div class="bg-white card-box border-20">
            <table class="w-full whitespace-nowrap">
              <tr class="text-left font-bold">
                <th class="pb-4 pt-6 px-6">Title</th>
                <th class="pb-4 pt-6 px-6">Description</th>
                <!-- <th class="pb-4 pt-6 px-6" colspan="2">Experience</th> -->
                <th class="pb-4 pt-6 px-6" colspan="1">Job Created</th>
              </tr>

              <tr v-for="job in jobs" :key="job.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
                <td class="border-t">
                  <Link class="flex items-center px-6 py-4" :href="`/jobs/${job.id}/edit`" tabindex="-1">
                    {{ job.title }}
                  </Link>
                </td>
                <td class="border-t">
                  <Link class="flex items-center px-6 py-4" :href="`/jobs/${job.id}/edit`" tabindex="-1">
                    {{ job.description }}
                  </Link>
                </td>

                <!-- <td class="border-t">
                  <Link class="flex items-center px-6 py-4" :href="`/jobs/${job.id}/edit`" tabindex="-1">
                    {{ job.experience }}
                  </Link>
                </td> -->

			  <td class="border-t">
                  <Link class="flex items-center px-6 py-4" :href="`/jobs/${job.id}/edit`" tabindex="-1">
                    {{ formatDate(job.created_at) }}
                  </Link>
                </td>
              </tr>
            </table>
          </div>
          <!-- /.card-box -->

          <!-- <div class="button-group d-inline-flex align-items-center mt-30">
            <loading-button :loading="form.processing" class="dash-btn-two tran3s me-3" type="submit">Submit</loading-button>

            <a href="#" class="dash-cancel-btn tran3s">Cancel</a>
          </div> -->
        </form>
      </div>
    </div>
    <!-- /.dashboard-body -->

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen modal-dialog-centered">
        <div class="container">
          <div class="remove-account-popup text-center modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <img data-src="images/icon/icon_22.svg" alt="" class="lazy-img m-auto" />
            <h2>Are you sure?</h2>
            <p>Are you sure to delete your account? All data will be lost.</p>
            <div class="button-group d-inline-flex justify-content-center align-items-center pt-15">
              <a href="#" class="confirm-btn fw-500 tran3s me-3">Yes</a>
              <button type="button" class="btn-close fw-500 ms-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
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
import { Head, Link } from '@inertiajs/inertia-vue3'
// import Icon from '@/Shared/Icon'
import pickBy from 'lodash/pickBy'
// import Layout from '@/Shared/Layout'
import throttle from 'lodash/throttle'
import mapValues from 'lodash/mapValues'
// import SearchFilter from '@/Shared/SearchFilter'

export default {
  components: {
    Head,
    // Icon,
    Link,
    // SearchFilter,
  },
  // layout: Layout,
  props: {
    filters: Object,
    jobs: Array,
  },
  data() {
    return {
      form: {
        //    search: this.filters.search,
        //    role: this.filters.role,
        //    trashed: this.filters.trashed,
      },
    }
  },
  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get('/jobs', pickBy(this.form), { preserveState: true })
      }, 150),
    },
  },
  methods: {
    reset() {
      this.form = mapValues(this.form, () => null)
    },
    formatDate(date) {
      return new Date(date).toLocaleDateString(); // Adjust the format as needed
    },
  },
}
</script>
<style>
/* @import 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css';*/

@import 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css'; 
@import 'https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700&display=swap';
 body {
    font-family: 'Gordita', 'EB Garamond', sans-serif; /* Specify 'Gordita' as the preferred font, fallback to 'EB Garamond' and then generic sans-serif */
  }
</style>
