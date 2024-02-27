

$(':submit').on('click', function() {
    $("form#data").submit(function(e) {
       e.preventDefault();
       var form = $("#data");
       var formData = new FormData(form[0]);
       $.ajax({
           url: '/submit-application',
           type: 'POST',
           data: formData,
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           async: false,
           success: function(data) {
               console.log(data);
               window.location.href = 'https://sagecorps.com/apply/application-submitted-page/';
           },
           error: (error) => {
               console.log(error);
               toastr.error('error: could not submit application');
           },
           cache: false,
           contentType: false,
           processData: false
       })
   });
});

$('#submit-form').on('click', function() {
   $("form#form2").submit(function(e) {
       e.preventDefault();
       var form = $("#form2");
       var formData = new FormData(form[0]);
       console.log(formData);
       $.ajax({
           url: '/submit-form',
           type: 'POST',
           data: formData,
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           async: false,
           success: function(data) {
               console.log(data);
               window.location.href = 'https://sagecorps.com/apply/application-submitted-page/';
           },
           error: (error) => {
               console.log(error);
               toastr.error('error: could not submit application');
           },
           cache: false,
           contentType: false,
           processData: false
       })
   });
});


$(document).ready(function() {
   $('.dropdown-submenu a.dropdown-toggle').on("click", function(e){
       $(this).next('ul').toggle();
       e.stopPropagation();
       e.preventDefault();
   });
   $('.dropdown-submenu').on('show.bs.dropdown', function() {
       $(this).find('.dropdown-menu').first().css('top', '0');
   });


       $('.custom-dropdown').hover(
         function() {
           $(this).addClass('show');
           $(this).find('.main').addClass('show');
         },
         function() {
           $(this).removeClass('show');
           $(this).find('.main').removeClass('show');
         }
       );

       $('.custom-dropdown .nav-link').click(function () {
         window.location.href = $(this).attr('href');
       });


       $('.sub-main').hover(
           function() {
             $(this).addClass('show');
             $(this).find('.sub').addClass('show');
           },
           function() {
             $(this).removeClass('show');
             $(this).find('.sub').removeClass('show');
           }
         );

       $('.sub').hover(
           function() {
             $(this).addClass('show');
             $(this).find('.subdm').addClass('show');
           },
           function() {
             $(this).removeClass('show');
             $(this).find('.subdm').removeClass('show');
           }
         );

   $('#cv').hide();
   document.getElementById('my-button').onclick = function() {
       document.getElementById('my-file').click();
   };
   $('input[type=file]').change(function(e) {
       //$('#f-name').html($(this).val().replace(/C:\\fakepath\\/i, ''));
       $('#cv-hide').hide();
   });
   $("#button").click(function() {
       var checked = this.checked;
       if (checked == true) {
           $('#cv').show();
       } else {
           $('#cv').hide();
       }
   });
   $('.gpa').change(function () {

      var select_value = $(this).text();
       if (select_value == '<2.75' || select_value == '2.75-3.0') {
           $('.reason ').removeAttr('disabled');
       } else if (select_value == '3.0-3.25' || select_value == '3.25-3.50' || select_value ==
           '3.50-3.75' || select_value == '3.75-4.0' || select_value == '4.0') {
           $('.reason ').prop("disabled", true);
       }
   });
   $("#school").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/education/schools",
           dataType: 'json',
           delay: 250,
           processResults: function(data) {
               return {
                   results: data.items
               };
           }
       },
   });
   $("#grad_year").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5068667004?questions=true",
           dataType: 'json',
           delay: 250,
           processResults: function(data) {
               const valuesArray = data.questions[5].fields[0].values;
               // Format data for Select2 options
               const selectOptions = valuesArray.map(item => ({
                   id: item.value,
                   text: item.label
               }));

               return {

                   results: selectOptions
               };
           }
       },
     //  minimumResultsForSearch: Infinity, // Disable the search box
       dropdownCssClass: "no-search",
   });
   $("#gpa").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5068667004?questions=true",
           dataType: 'json',
           delay: 250,
           processResults: function(data) {
               const valuesArray = data.questions[8].fields[0].values;

               const selectOptions = valuesArray.map(item => ({
                  id: item.value,
                   text: item.label
               }));

               return {

                   results: selectOptions
               };
           }
       },
     //  minimumResultsForSearch: Infinity
      // minimumResultsForSearch: -1,
      dropdownCssClass: "no-search"
      // Assuming you have a reference to your Select2 input field
   });
// var select2Input = $(".select2-search__field");

// Disable the search input
// select2Input.prop("disabled", true);
//     $('#gpa').on('select2:opening select2:closing', function( event ) {
//         var $searchfield = $(this).parent().find('.select2-search__field');
//         $searchfield.prop('disabled', true);
//    });
   $("#gender").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5068667004?questions=true",
           dataType: 'json',
           delay: 250,
           processResults: function (data) {
               const valuesArray = data.questions[15].fields[0].values;
               const selectOptions = valuesArray.map(item => ({
                   id: item.value,
                   text: item.label
               }));

               return {

                   results: selectOptions
               };
           }
       },
       dropdownCssClass: "no-search",
   });

   $("#race").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5068667004?questions=true",
           dataType: 'json',
           delay: 250,
           processResults: function(data) {
               const valuesArray = data.questions[16].fields[0].values;

               const selectOptions = valuesArray.map(item => ({
                   id: item.value,
                   text: item.label
               }));

               return {

                   results: selectOptions
               };
           }
       },
       dropdownCssClass: "no-search",
   });
   $("#lang").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5068667004?questions=true",
           dataType: 'json',
           delay: 250,
           processResults: function(data) {
               const valuesArray = data.questions[18].fields[0].values;

               const selectOptions = valuesArray.map(item => ({
                   id: item.value,
                   text: item.label
               }));

               return {

                   results: selectOptions
               };
           }
       },
       dropdownCssClass: "no-search",
   });
   $("#prog-loc1").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5068667004?questions=true",
           dataType: 'json',
           delay: 250,
           processResults: function(data) {
               const valuesArray = data.questions[20].fields[0].values;

               const selectOptions = valuesArray.map(item => ({
                   id: item.value,
                   text: item.label
               }));

               return {

                   results: selectOptions
               };
           }
       },
       dropdownCssClass: "no-search",
   });
   $("#role1").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5068667004?questions=true",
           dataType: 'json',
           delay: 250,
           processResults: function(data) {
               const valuesArray = data.questions[21].fields[0].values;

               const selectOptions = valuesArray.map(item => ({
                   id: item.value,
                   text: item.label
               }));

               return {

                   results: selectOptions
               };
           }
       },
       dropdownCssClass: "no-search",
   });

   $("#prog-loc2").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5068667004?questions=true",
           dataType: 'json',
           delay: 250,
           processResults: function(data) {
               const valuesArray = data.questions[22].fields[0].values;

               const selectOptions = valuesArray.map(item => ({
                   id: item.value,
                   text: item.label
               }));

               return {

                   results: selectOptions
               };
           }
       },
       dropdownCssClass: "no-search",
   });
   $("#choice-2").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5068667004?questions=true",
           dataType: 'json',
           delay: 250,
           processResults: function(data) {
               const valuesArray = data.questions[23].fields[0].values;

               const selectOptions = valuesArray.map(item => ({
                   id: item.value,
                   text: item.label
               }));

               return {

                   results: selectOptions
               };
           }
       },
       dropdownCssClass: "no-search",
   });
   $("#about-us").select2({
       ajax: {
           url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5068667004?questions=true",
           dataType: 'json',
           delay: 250,
           processResults: function(data) {
               const valuesArray = data.questions[30].fields[0].values;

               const selectOptions = valuesArray.map(item => ({
                   id: item.value,
                   text: item.label
               }));

               return {

                   results: selectOptions
               };
           }
       },
       dropdownCssClass: "no-search",
   });


$("#dropbox").on('click', function(e) {
       e.preventDefault();

       // Open Dropbox Chooser
       Dropbox.choose({
           success: function (files) {
               handleDropboxFiles(files);
               $('#cv-hide').hide();
           },
           linkType: "direct", // or "preview"
           multiselect: false, // Set to true if you want to allow multiple file selection
           extensions: ['.pdf', '.doc', '.docx', '.txt'], // Specify allowed file extensions
       });
   });

   function handleDropboxFiles(files) {
       let entry = $('<span/>', {class: 'file-block'}),
           iconClass = 'file-icon fab fa-dropbox',
           fileName = files[0].name,
           fileIcon = $('<span/>', {class: iconClass}),
           fileNameSpan = $('<span/>', {class: 'name', text: fileName}),
           fileDelete = $('<span/>', {class: 'file-delete fas fa-times'});

       entry.append(fileIcon)
           .append(fileNameSpan)
           .append(fileDelete);

       $("#filesList > #f-name").empty().append(entry);

       // Set the Dropbox file information to hidden fields
       $("#db-filename").val(fileName);
       $("#db-file_url").val(files[0].link);

       // You can add files to the DataTransfer object if needed
       // dt.items.add(new File([], fileName));

       // Display the file upload area
   }

   // EventListener for the delete button created
   $(document).on('click', 'span.file-delete', function () {
       // Reset the file information from hidden fields
       $("#db-filename").val("");
       $("#db-file_url").val("");
       $('#cv-hide').show();

       // Remove the display of the file name
       $(this).parent().remove();

       // Check if all files are removed, then hide '#cv'
       if ($('#filesList > #f-name').children().length === 0) {
           $('#cv').hide();
       }
   });

   $("#cloneme").bind("click", function() {
       var index = $("#d2 select").length + 1;
       //Clone the DropDownList
       var ddl = $("#school").clone();
       //Set the ID and Name
       ddl.attr("id", "school_" + index);
       ddl.attr("name", "school_" + index);
       ddl.attr("class", "form-control school");
       //[OPTIONAL] Copy the selected value
       var selectedValue = $("#school option:selected").val();
       ddl.find("option[value = '" + selectedValue + "']").attr("selected", "selected");
       //Append to the DIV.
       $("#d2").append(ddl);
       $("#d2").append("<br /><br />");
       $(".school").select2({
           ajax: {
               url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/education/schools",
               dataType: 'json',
               delay: 250,
               processResults: function(data) {
                   return {
                       results: data.items
                   };
               }
           },
       });
       // var $orginal = $('form #school');
       // var $cloned = $orginal.clone();
       // $('#school').clone().attr('id', 'id_'+$('#school').index()).insertAfter($('#school'));
   });
});

const mobile_nav = document.querySelector(".mobile-navbar-btn");
const nav_header = document.querySelector(".header");
const navbar = document.querySelector(".navbar");

const toggleNavbar = () => {
 // alert("Plz Subscribe ");
 nav_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar());

document.addEventListener('scroll', () =>{
   const header = document.querySelector('header');
   if(window.scrollY > 0){
       header.classList.add('scrolled');
   }else{
           header.classList.remove('scrolled');
   }
})

document.addEventListener('DOMContentLoaded', function () {
   const navbarLinks = document.querySelectorAll('.navbar-link');

   navbarLinks.forEach(function (link) {
       link.addEventListener('click', function (event) {
           if (link.nextElementSibling && link.nextElementSibling.classList.contains('main')) {
               event.preventDefault();
               link.nextElementSibling.classList.toggle('show');
           }
       });

       link.addEventListener('dblclick', function () {
           if (link.hasAttribute('href')) {
               window.location.href = link.getAttribute('href');
           }
       });
   });

   const dropdowns = document.querySelectorAll('.custom-dropdown');

   dropdowns.forEach(function (dropdown) {
       const dropdownLink = dropdown.querySelector('.navbar-link');

       dropdownLink.addEventListener('mouseenter', function () {
           dropdown.classList.add('show');
       });

       dropdownLink.addEventListener('mouseleave', function () {
           dropdown.classList.remove('show');
       });

       dropdownLink.addEventListener('click', function (event) {
           event.preventDefault();
           dropdown.classList.toggle('clicked');
       });

       dropdownLink.addEventListener('dblclick', function () {
           dropdown.classList.remove('clicked');
           if (dropdownLink.hasAttribute('href')) {
               window.location.href = dropdownLink.getAttribute('href');
           }
       });
   });
});
