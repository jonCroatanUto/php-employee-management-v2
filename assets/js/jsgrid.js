const employeeUrl = "./library/employeeController.php";
// console.log(baseURL);

// $.ajax({
//   url: employeeUrl,
//   method: "GET",
// })
//   .done(function (response) {
//     renderTable(response);
//     $("#navEmployee")
//       .attr("href", "./employee.php?new=true")
//       .removeClass("disabled");
//     $("#navEmployee svg use").attr(
//       "xlink:href",
//       "../node_modules/bootstrap-icons/bootstrap-icons.svg#person-plus-fill"
//     );
//   })
//   .fail(function (response) {})
//   .always(function () {});

function insertItemHandler(item) {
  console.log(item);
  return $.ajax({
    type: "POST",
    url: baseURL + "Dashboard/insertEmployee",
    data: item,
    // success: function (item) {
    //   console.log(item);
    // },
  }).done(() => {
    $("#jsGrid").jsGrid("loadData");
  });
}

function deleteItemHandler(item) {
  console.log(item);
  return $.ajax({
    type: "DELETE",
    url: baseURL + "Dashboard/deleteEmployee/" + item.employee_no,
    data: item,
    success: function (item) {
      console.log(item);
    },
  }).done(() => {
    $("#jsGrid").jsGrid("loadData");
  });
}

function renderTable(employeesJson = {}) {
  $("#jsGrid").jsGrid({
    width: "100%",
    height: "auto",
    inserting: true,
    editing: false,
    sorting: true,
    paging: true,
    autoload: true,
    // filtering: true,
    rowDoubleClick: function (item) {
      window.location.replace(
        `${baseURL}Dashboard/dataEmployee/${item.item.employee_no}`
      );
    },

    controller: {
      loadData: function (response) {
        return $.ajax({
          type: "GET",
          url: baseURL + "Dashboard/getAllEmployees",
          dataType: "json",
          // url: employeeUrl,
          // data: response,
          // success: function (data) {
          //   console.log(data);
          //  },
        });
      },
      insertItem: function (item) {
        insertItemHandler(item);
      },
      deleteItem: function (item) {
        deleteItemHandler(item);
      },
    },

    data: employeesJson,

    fields: [
      { name: "employee_no", title: "id", type: "number", visible: false },
      {
        name: "us_id",
        title: "us_creator_id",
        type: "number",
        width: 3,
        validate: "required",
      },
      {
        name: "emp_name",
        title: "Name",
        type: "text",
        width: 3,
        validate: "required",
      },
      {
        name: "emp_lastName",
        title: "Last Name",
        type: "text",
        width: 3,
        validate: "required",
      },
      {
        name: "emp_email",
        title: "Email",
        type: "text",
        width: 3,
        validate: "required",
      },
      {
        name: "emp_age",
        title: "Age",
        type: "text",
        // type: "number",
        width: 2,
        validate: "required",
      },
      {
        name: "emp_streetAddress",
        title: "Street No.",
        type: "text",
        // type: "number",
        width: 2,
        validate: "required",
      },
      {
        name: "emp_city",
        title: "City",
        type: "text",
        width: 3,
        validate: "required",
      },
      {
        name: "emp_state",
        title: "State",
        type: "text",
        width: 2,
        validate: "required",
      },
      {
        name: "emp_postalCode",
        title: "Postal Code",
        type: "text",
        // type: "number",
        width: 2,
        validate: "required",
      },
      {
        name: "emp_phoneNum",
        title: "Phone Number",
        type: "text",
        // type: "number",
        width: 3,
        validate: "required",
      },
      { type: "control", width: 1, editButton: false },
    ],
  });
}
renderTable();
