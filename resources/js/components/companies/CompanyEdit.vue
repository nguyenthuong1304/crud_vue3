<template>
  <Form :companyId="id" />
</template>

<script>
import Form from "./Form";

export default {
  name: "CompanyEdit",

  props: {
    id: {
      required: true,
      type: String
    }
  },
  components: {
    Form,
  },
}
</script>
