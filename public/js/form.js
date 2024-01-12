

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
                // if(response.Errors.length > 0){
                //     toastr.error('errors messages');
                // } else {
                toastr.success('application submitted successfully');
                setTimeout(function() {
                    window.location.reload();
                }, 1500);
                // }

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
        $('#f-name').html($(this).val().replace(/C:\\fakepath\\/i, ''));
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
            url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004?questions=true",
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
    });
    $("#gpa").select2({
        ajax: {
            url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004?questions=true",
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
    });
    $("#race").select2({
        ajax: {
            url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004?questions=true",
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
    });
    $("#lang").select2({
        ajax: {
            url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004?questions=true",
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
    });
    $("#prog-loc1").select2({
        ajax: {
            url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004?questions=true",
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
    });
    $("#role1").select2({
        ajax: {
            url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004?questions=true",
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
    });

    $("#prog-loc2").select2({
        ajax: {
            url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004?questions=true",
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
    });
    $("#choice-2").select2({
        ajax: {
            url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004?questions=true",
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
    });
    $("#about-us").select2({
        ajax: {
            url: "https://boards-api.greenhouse.io/v1/boards/sagecorps/jobs/5011434004?questions=true",
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
    });


    $('#dropbox').click(function(e) {
        e.preventDefault();
        options = {
            // Required. Called when a user selects an item in the Chooser.
            success: function(file) {
                $('#f-name').html(file[0].name);
                $('#cv-hide').hide();
            },
            error: function(xhr) {
                alert("error could not upload")
            },
            linkType: "preview", // or "direct"
            multiselect: false, // or true
            extensions: ['.pdf', '.doc', '.docx', '.txt', '.rtf'],
            folderselect: false, // or true
        };
        Dropbox.choose(options);

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
  nav_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar());

document.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  if (window.scrollY > 0) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});
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
