<template>
  <div>
    <aside class="dash-aside-navbar">
      <div class="position-relative">
        <div
          class="logo text-md-center d-md-block d-flex align-items-center justify-content-between"
        >
          <button class="close-btn d-block d-md-none">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>
        <div class="user-data">
          <div class="user-avatar online position-relative rounded-circle">
            <img
              src="images/avatar_01.jpg"
              data-src="images/avatar_01.jpg"
              alt=""
              class="lazy-img"
            />
          </div>
          <div class="user-name-data">
            <button
              class="user-name dropdown-toggle"
              type="button"
              id="profile-dropdown"
              data-bs-toggle="dropdown"
              data-bs-auto-close="outside"
              aria-expanded="false"
            >
              Admin
            </button>
            <ul class="dropdown-menu" aria-labelledby="profile-dropdown">
              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="candidate-dashboard-profile.html"
                  ><img
                    data-src="images/icon/icon_23.svg"
                    alt=""
                    class="lazy-img"
                  /><span class="ms-2 ps-1">Profile</span></a
                >
              </li>
              <li>
                <a
                  class="dropdown-item d-flex align-items-center"
                  href="candidate-dashboard-settings.html"
                  ><img
                    data-src="images/icon/icon_24.svg"
                    alt=""
                    class="lazy-img"
                  /><span class="ms-2 ps-1">Account Settings</span></a
                >
              </li>
              <li>
                <a class="dropdown-item d-flex align-items-center" href="#"
                  ><img
                    data-src="images/icon/icon_25.svg"
                    alt=""
                    class="lazy-img"
                  /><span class="ms-2 ps-1">Notification</span></a
                >
              </li>
            </ul>
          </div>
        </div>
        <!-- /.user-data -->
        <nav class="dasboard-main-nav">
          <ul class="style-none">
            <li :class="{ active: isLinkActive('/') }">
              <Link href="/dashboard" class="d-flex w-100 align-items-center">
                <img
                  data-src="images/icon/icon_1_active.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>Dashboard</span>
              </Link>
            </li>
            <li :class="{ active: isLinkActive('/profile') }">
              <Link href="/profile" class="d-flex w-100 align-items-center">
                <img
                  data-src="images/icon/icon_2.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>My Profile</span>
              </Link>
            </li>
            <li :class="{ active: isLinkActive('/jobs') }">
              <Link href="/jobs" class="d-flex w-100 align-items-center">
                <img
                  data-src="images/icon/icon_3.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>My Jobs</span>
              </Link>
            </li>
            <li>
              <a
                href="employer-dashboard-message.html"
                class="d-flex w-100 align-items-center"
              >
                <img
                  data-src="images/icon/icon_4.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>Messages</span>
              </a>
            </li>
            <li>
              <a
                href="employer-dashboard-submit-job.html"
                class="d-flex w-100 align-items-center"
              >
                <img
                  data-src="images/icon/icon_39.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>Submit Job</span>
              </a>
            </li>
            <li>
              <a
                href="employer-dashboard-saved-candidate.html"
                class="d-flex w-100 align-items-center"
              >
                <img
                  data-src="images/icon/icon_6.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>Saved Candidate</span>
              </a>
            </li>
            <li>
              <a href="" class="d-flex w-100 align-items-center">
                <img
                  data-src="images/icon/icon_40.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>Membership</span>
              </a>
            </li>
            <li>
              <a
                href="employer-dashboard-settings.html"
                class="d-flex w-100 align-items-center"
              >
                <img
                  data-src="images/icon/icon_7.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <a
                href="#"
                class="d-flex w-100 align-items-center"
                data-bs-toggle="modal"
                data-bs-target="#deleteModal"
              >
                <img
                  data-src="images/icon/icon_8.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>Delete Account</span>
              </a>
            </li>
            <li>
              <Link
                href="/logout"
                class="d-flex w-100 align-items-center"
                method="delete"
              >
                <img
                  data-src="images/icon/icon_2.svg"
                  alt=""
                  class="lazy-img"
                />
                <span>Log out</span>
              </Link>
            </li>
          </ul>
        </nav>
        <!-- /.dasboard-main-nav -->
        <div class="profile-complete-status">
          <div class="progress-value fw-500">87%</div>
          <div class="progress-line position-relative">
            <div class="inner-line" style="width: 80%"></div>
          </div>
          <p>Profile Complete</p>
        </div>
        <!-- /.profile-complete-status -->
      </div>
    </aside>
    <slot />
  </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
//import {Layout} from '@/components/Layout.vue';
import Icon from "@/components/Icon.vue";
import Logo from "@/components/Logo.vue";
import MainMenu from "@/components/MainMenu.vue";
import FlashMessages from "@/components/FlashMessages.vue";
export default {
  components: {
    //Dropdown,
    FlashMessages,
    Icon,
    Link,
    Logo,
    MainMenu,
  },
  props: {
    auth: Object,
  },
  methods: {
    isLinkActive(route) {
      // Check if the current route matches the specified route
      return this.$page.url.startsWith(route);
    },
  },
};
</script>
