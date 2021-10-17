<template>
  <div v-if="current == 1">
    <h4 class="text-2xl font-medium mb-2">Basic Informations</h4>
    <div class="mb-5">
      <label for="name" class="block text-purple-500 text-sm font-bold mb-1"
        >Select The Services You Are Interested?
      </label>
      <Multiselect
        v-model="service.value"
        v-bind="service"
        mode="tags"
        placeholder="Our services"
      />
    </div>
    <div class="mb-5">
      <label for="fname" class="block text-purple-500 text-sm font-bold mb-1"
        >Your First Name</label
      >
      <input
        type="text"
        id="fname"
        class="
          appearance-none
          border
          rounded
          w-full
          py-2
          px-3
          text-gray-600
          leading-tight
          focus:outline-none
        "
        v-model="fname"
      />
    </div>
    <div class="mb-5">
      <label for="lname" class="block text-purple-500 text-sm font-bold mb-1"
        >Your Last Name</label
      >
      <input
        type="text"
        id="lname"
        class="
          appearance-none
          border
          rounded
          w-full
          py-2
          px-3
          text-gray-600
          leading-tight
          focus:outline-none
        "
        v-model="lname"
      />
    </div>
    <div class="mb-5">
      <label for="country" class="block text-purple-500 text-sm font-bold mb-1"
        >Select Your Country</label
      >
      <Multiselect
        v-model="country.value"
        v-bind="country"
        placeholder="Where do you live in?"
      />
    </div>
    <button
      type="button"
      class="
        w-full
        h-12
        px-6
        text-indigo-100
        transition-colors
        duration-150
        bg-indigo-700
        focus:shadow-outline
        hover:bg-indigo-800
      "
      @click="next"
      :disabled="!sectionOneIsValid"
    >
      Next
    </button>
  </div>

  <div v-if="current == 2">
    <h4 class="text-2xl font-medium mb-2">Business Informations</h4>
    <div class="mb-5">
      <label for="bname" class="block text-purple-500 text-sm font-bold mb-1"
        >Business Name</label
      >
      <input
        type="text"
        id="bname"
        class="
          appearance-none
          border
          rounded
          w-full
          py-2
          px-3
          text-gray-600
          leading-tight
          focus:outline-none
        "
        v-model="bname"
      />
    </div>
    <div class="mb-5">
      <label for="email" class="block text-purple-500 text-sm font-bold mb-1"
        >Business Email</label
      >
      <input
        type="email"
        id="email"
        class="
          appearance-none
          border
          rounded
          w-full
          py-2
          px-3
          text-gray-600
          leading-tight
          focus:outline-none
        "
        v-model="email"
      />
    </div>
    <div class="mb-5">
      <label for="bphone" class="block text-purple-500 text-sm font-bold mb-1"
        >Business Phone Number
      </label>
      <input
        type="text"
        id="bphone"
        class="
          appearance-none
          border
          rounded
          w-full
          py-2
          px-3
          text-gray-600
          leading-tight
          focus:outline-none
        "
        v-model="bphone"
      />
    </div>
    <div class="flex">
      <button
        type="button"
        class="
          mr-2
          w-full
          h-12
          px-6
          text-indigo-100
          transition-colors
          duration-150
          bg-gray-400
          focus:shadow-outline
          hover:bg-gray-600
        "
        @click="prev"
      >
        Previous
      </button>
      <button
        type="button"
        class="
          ml-2
          w-full
          h-12
          px-6
          text-indigo-100
          transition-colors
          duration-150
          bg-indigo-700
          focus:shadow-outline
          hover:bg-indigo-800
        "
        @click="next"
        :disabled="!sectionTwoIsValid"
      >
        Next
      </button>
    </div>
  </div>

  <div v-if="current == 3">
    <div class="mb-5">
      <label
        for="outsourcing"
        class="block text-purple-500 text-sm font-bold mb-1"
        >Are You Currently Outsourcing?
      </label>
      <div>
        <label class="inline-flex items-center">
          <input
            type="radio"
            class="form-radio"
            v-model="outsourcing"
            value="yes"
          />
          <span class="ml-2">Yes</span>
        </label>
      </div>
      <div>
        <label class="inline-flex items-center">
          <input
            type="radio"
            class="form-radio"
            v-model="outsourcing"
            value="no"
          />
          <span class="ml-2">No</span>
        </label>
      </div>
    </div>
    <div class="mb-5">
      <label for="contact" class="block text-purple-500 text-sm font-bold mb-1"
        >How Would You Like To Be Contacted?
      </label>
      <div>
        <label class="inline-flex items-center">
          <input
            type="radio"
            class="form-radio"
            v-model="contact"
            value="phone"
          />
          <span class="ml-2">Via Phone</span>
        </label>
      </div>
      <div>
        <label class="inline-flex items-center">
          <input
            type="radio"
            class="form-radio"
            v-model="contact"
            value="email"
          />
          <span class="ml-2">Via Email</span>
        </label>
      </div>
      <div>
        <label class="inline-flex items-center">
          <input
            type="radio"
            class="form-radio"
            v-model="contact"
            value="online meeting"
          />
          <span class="ml-2">Online Meeting</span>
        </label>
      </div>
    </div>

    <div class="mb-5">
      <label for="info" class="block text-purple-500 text-sm font-bold mb-1"
        >Additional Informations You Want To Share With Us?
      </label>
      <textarea
        id="info"
        rows="5"
        class="
          appearance-none
          border
          rounded
          w-full
          py-2
          px-3
          text-gray-600
          leading-tight
          focus:outline-none
        "
        v-model="info"
      ></textarea>
    </div>

    <div class="flex">
      <button
        type="button"
        class="
          mr-2
          w-full
          h-12
          px-6
          text-indigo-100
          transition-colors
          duration-150
          bg-gray-400
          focus:shadow-outline
          hover:bg-gray-600
        "
        @click="prev"
      >
        Previous
      </button>
      <button
        type="button"
        class="
          ml-2
          w-full
          h-12
          px-6
          text-indigo-100
          transition-colors
          duration-150
          bg-indigo-700
          focus:shadow-outline
          hover:bg-indigo-800
        "
        @click.prevent="onFormSubmit"
        :disabled="!sectionOneThreeValid"
      >
        <div class="lds-dual-ring" v-if="isLoading"></div>
        <span v-else>Submit</span>
      </button>
    </div>
  </div>

  <!-- <div>
    <transition name="fade">
      <h3 v-if="isShow">Hello world</h3>
    </transition>

    <button @click="isShow = !isShow">Click</button>
  </div> -->
</template>
<script>
import Multiselect from "@vueform/multiselect";
import axios from "axios";
export default {
  data() {
    return {
      isShow: false,
      isLoading: false,
      total: 3,
      current: 1,
      service: {
        mode: "tags",
        value: [],
        closeOnSelect: false,
        options: [
          { value: "Website Development", label: "Website Development" },
          {
            value: "Custom Software Development",
            label: "Custom Software Development",
          },
          { value: "Digital Marketing", label: "Digital Marketing" },
          {
            value: "Mobile Apps Developement",
            label: "Mobile Apps Developement",
          },
          { value: "Identity Design", label: "Identity Design" },
          { value: "Cloud Service", label: "Cloud Service" },
        ],
        createTag: true,
      },
      country: {
        value: "",
        options: [
          { value: "Australia", label: "Australia" },
          { value: "Bangladesh", label: "Bangladesh" },
          { value: "Other", label: "Other" },
        ],
      },
      fname: "",
      lname: "",
      bname: "",
      email: "",
      bphone: "",
      outsourcing: "",
      contact: "",
      info: "",
    };
  },
  components: {
    Multiselect,
  },
  methods: {
    emailIsValid() {
      if (
        /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(
          this.email
        )
      ) {
        return true;
      } else {
        return false;
      }
    },
    next() {
      this.current += 1;
    },
    prev() {
      this.current -= 1;
    },
    onFormSubmit() {
      this.isLoading = true;
      let formdata = new FormData();

      formdata.append("first_name", this.fname);
      formdata.append("last_name", this.lname);
      formdata.append("business_name", this.bname);
      formdata.append("email", this.email);
      formdata.append("phone", this.bphone);
      formdata.append("country", this.country.value);
      formdata.append("services", this.service.value);
      formdata.append("outsourcing", this.outsourcing);
      formdata.append("contact", this.contact);
      formdata.append("info", this.info);

      axios
        .post("api/get-pricing", formdata)
        .then((res) => {
          this.isLoading = false;
          alert(
            "Your request successfully sent to our team. Thank you very much."
          );
        })
        .catch((error) => {
          console.error(error);
        });
    },
  },
  computed: {
    sectionOneIsValid() {
      return (
        this.service.value && this.fname && this.lname && this.country.value
      );
    },
    sectionTwoIsValid() {
      return this.bname && this.emailIsValid() && this.bphone;
    },
    sectionOneThreeValid() {
      return this.outsourcing && this.contact;
    },
  },
};
</script>
<style src="@vueform/multiselect/themes/default.css"></style>
<style>
.lds-dual-ring {
  display: inline-block;
  width: 25px;
  height: 25px;
}
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 20px;
  height: 20px;
  margin: 6px;
  border-radius: 50%;
  border: 3px solid #fff;
  border-color: #fff transparent #fff transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>