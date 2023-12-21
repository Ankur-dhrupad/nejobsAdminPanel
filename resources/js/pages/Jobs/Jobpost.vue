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
            <button>
              <img
                src=""
                data-src="images/icon/icon_10.svg"
                alt=""
                class="lazy-img m-auto"
              />
            </button>
            <!-- </form> -->
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
              <a
                href="employer-dashboard-submit-job.html"
                class="job-post-btn tran3s"
                >Post a Job</a
              >
            </div>
          </div>
        </header>
        <!-- End Header -->

        <h2 class="main-title">Post a New Job</h2>
        <form @submit.prevent="jobstore">
          <text-input
            v-model="form.authUserId"
            class="mt-10"
            id="authUserId"
            type="hidden"
            autofocus
            autocapitalize="off"
          />

          <div class="bg-white card-box border-20">
            <h4 class="dash-title-three">Job Details</h4>
            <div class="dash-input-wrapper mb-30">
              <label for="">Job Title*</label>
              <text-input
                v-model="form.title"
                :error="form.errors.title"
                class="mt-10"
                id="title"
                type="text"
                placeholder="Ex: Product Designer"
                autofocus
                autocapitalize="off"
              />

              <!-- <input type="text" placeholder="Ex: Product Designer"> -->
            </div>
            <!-- /.dash-input-wrapper -->
            <div class="dash-input-wrapper mb-30">
              <label for="">Job Description*</label>
              <!-- <textarea class="size-lg" placeholder="Write about the job in details..."></textarea> -->
              <text-input
                v-model="form.description"
                :error="form.errors.description"
                class="mt-10"
                id="description"
                type="text"
                placeholder="Write about the job in details..."
                autofocus
                autocapitalize="off"
              />
            </div>
            <!-- /.dash-input-wrapper -->
            <div class="row align-items-end">
              <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                  <label for="">Job Category</label>
                  <select-input
                    v-model="form.category"
                    :error="form.errors.category"
                    class="pb-8 pr-6 w-full lg:w-1/2"
                  >
                    <option :value="null">Select Category</option>
                    <option value="Desinger">Desinger</option>
                    <option value="It & Development">It & Development</option>
                  </select-input>
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
              <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                  <label for="">Job Type</label>

                  <select-input
                    v-model="form.type"
                    :error="form.errors.type"
                    class="pb-8 pr-6 w-full lg:w-1/2"
                  >
                    <option :value="null">Select Type</option>
                    <option value="Full time">Full time</option>
                    <option value="Part time">Part time</option>
                    <option value="Hourly-Contract">Hourly-Contract</option>
                    <option value="Fixed-Price">Fixed-Price</option>
                  </select-input>
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
              <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                  <label for="">Salary*</label>
                  <select-input
                    v-model="form.salary"
                    :error="form.errors.salary"
                    class="pb-8 pr-6 w-full lg:w-1/2"
                  >
                    <option :value="null">Select Type</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Weekly">Weekly</option>
                  </select-input>
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
              <div class="col-md-3">
                <div class="dash-input-wrapper mb-30">
                  <label for="">Min</label>

                  <text-input
                    v-model="form.min"
                    :error="form.errors.min"
                    class="mt-10"
                    id="min"
                    type="number"
                    placeholder="Min"
                    autofocus
                    autocapitalize="off"
                  />
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
              <div class="col-md-3">
                <div class="dash-input-wrapper mb-30">
                  <text-input
                    v-model="form.max"
                    :error="form.errors.max"
                    class="mt-10"
                    id="max"
                    type="number"
                    placeholder="Max"
                    autofocus
                    autocapitalize="off"
                  />

                  <!-- <input type="text" placeholder="Max" /> -->
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
            </div>

            <h4 class="dash-title-three pt-50 lg-pt-30">Skills & Experience</h4>
            <div class="row align-items-end">
              <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                  <label for="">Skills*</label>

                  <select
                    class="pb-8 pr-6 w-full lg:w-1/2"
                    v-model="form.skills"
                    ref="select"
                    multiple
                  >
                    <option
                      v-for="option in options"
                      :key="option.value"
                      :value="option.value"
                    >
                      {{ option.label }}
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <!-- /.dash-input-wrapper -->
            <div class="row align-items-end">
              <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                  <label for="">Experience*</label>

                  <select-input
                    v-model="form.experience"
                    :error="form.errors.experience"
                    class="pb-8 pr-6 w-full lg:w-1/2"
                  >
                    <option :value="null">Select Experience</option>
                    <option value="Fresher">Fresher</option>
                    <option value="No-Experience">No-Experience</option>
                    <option value="Expert">Expert</option>
                  </select-input>
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
              <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                  <label for="">Location*</label>

                  <select-input
                    v-model="form.location"
                    :error="form.errors.location"
                    class="pb-8 pr-6 w-full lg:w-1/2"
                  >
                    <option :value="null">Select Location</option>
                    <option value="Washington DC">Washington DC</option>
                    <option value="Miami">Miami</option>
                  </select-input>
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
              <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                  <label for="">Industry*</label>
                  <select-input
                    v-model="form.industry"
                    :error="form.errors.industry"
                    class="pb-8 pr-6 w-full lg:w-1/2"
                  >
                    <option :value="null">Select Industry</option>
                    <option value="Industry 1">Industry 1</option>
                    <option value="Industry 2">Industry 2</option>
                  </select-input>
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
              <div class="col-md-6">
                <div class="dash-input-wrapper mb-30">
                  <label for="">English Fluency</label>

                  <select-input
                    v-model="form.english_fluency"
                    :error="form.errors.english_fluency"
                    class="pb-8 pr-6 w-full lg:w-1/2"
                  >
                    <option :value="null">Select Industry</option>
                    <option value="Basic">Basic</option>
                    <option value="Conversational">Conversational</option>
                    <option value="Fluent">Fluent</option>
                    <option value="Native/Bilingual">Native/Bilingual</option>
                  </select-input>
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
            </div>
            <h4 class="dash-title-three pt-50 lg-pt-30">Address & Location</h4>
            <div class="row">
              <div class="col-12">
                <div class="dash-input-wrapper mb-25">
                  <label for="">Address*</label>
                  <text-input
                    v-model="form.address"
                    :error="form.errors.address"
                    class="mt-10"
                    id="address"
                    type="text"
                    placeholder="Cowrasta, Chandana, Gazipur Sadar"
                    autofocus
                    autocapitalize="off"
                  />

                  <!-- <input type="text" placeholder="Cowrasta, Chandana, Gazipur Sadar" /> -->
                </div>
              </div>
              <div class="col-lg-4">
                <div class="dash-input-wrapper mb-25">
                  <label for="">Country*</label>
                  <select-input
                    v-model="form.country"
                    :error="form.errors.country"
                    class="pb-8 pr-6 w-full lg:w-1/2"
                  >
                    <option :value="null">Select Country</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Andorra">Andorra</option>
                    <option value="India">India</option>
                  </select-input>
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
              <div class="col-lg-4">
                <div class="dash-input-wrapper mb-25">
                  <label for="">City*</label>
                  <select-input
                    v-model="form.city"
                    :error="form.errors.city"
                    class="pb-8 pr-6 w-full lg:w-1/2"
                  >
                    <option :value="null">Select City</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Guwahati">Guwahati</option>
                  </select-input>
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
              <div class="col-lg-4">
                <div class="dash-input-wrapper mb-25">
                  <label for="">State*</label>
                  <select-input
                    v-model="form.state"
                    :error="form.errors.state"
                    class="pb-8 pr-6 w-full lg:w-1/2"
                  >
                    <option :value="null">Select State</option>
                    <option value="Assam">Assam</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Shanghai">Shanghai</option>
                  </select-input>
                </div>
                <!-- /.dash-input-wrapper -->
              </div>
            </div>
          </div>
          <!-- /.card-box -->

          <div class="button-group d-inline-flex align-items-center mt-30">
            <loading-button
              :loading="form.processing"
              class="dash-btn-two tran3s me-3"
              type="submit"
              >Submit</loading-button
            >

            <a href="#" class="dash-cancel-btn tran3s">Cancel</a>
          </div>
        </form>
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
import { Head, Link } from "@inertiajs/inertia-vue3";
import Layout from "@/components/Layout.vue";
//import TextInput from '@/Shared/TextInput'
import SelectInput from "@/components/SelectInput.vue";
import LoadingButton from "@/components/LoadingButton.vue";
import TextInput from "@/components/TextInput.vue";

export default {
  setup() {},
  components: {
    Head,
    Link,
    LoadingButton,

    TextInput,
    SelectInput,
  },
  layout: Layout,
  remember: "form",

  data() {
    return {
      form: this.$inertia.form({
        emp_id: this.authUserId,

        title: null,
        description: null,
        category: null,
        type: null,
        salary: null,
        min: null,
        max: null,
        experience: null,
        industry: null,
        location: null,
        english_fluency: null,
        address: null,
        country: null,
        city: null,
        state: null,
        skills: [],
      }),
      options: [
        { value: "HTML", label: "HTML" },
        { value: "CSS", label: "CSS" },
        { value: "PHP", label: "PHP" },
        { value: "Laravel", label: "Laravel" },
      ],
    };
  },
  props: {
    authUserId: Number, // Assuming authUserId is a number, adjust the type accordingly
  },
  mounted() {
    // Set the authUserId from the prop
    console.log("Authenticated User ID:", this.authUserId);
    // Initialize Select2
    $(this.$refs.select).select2();
    // Optionally, set the initial values if needed
    $(this.$refs.select).val(this.form.skills).trigger("change");
    // Listen for changes in Select2 and update the Vue model
    $(this.$refs.select).on("change", () => {
      this.form.skills = $(this.$refs.select).val();
    });
  },

  methods: {
    jobstore() {
      this.form.post("/jobstore");
    },
  },
};
</script>
<style>
/* @import 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css';*/
@import "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css";
@import url("https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700&display=swap");
@import url("https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css");
/* @import 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'; */

body {
  font-family: "Gordita", "EB Garamond", sans-serif; /* Specify 'Gordita' as the preferred font, fallback to 'EB Garamond' and then generic sans-serif */
}
</style>
