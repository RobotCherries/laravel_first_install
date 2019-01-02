<style>
  /* Date range picker */
  .datepicker__container .daterangepicker::before,
  .datepicker__container .daterangepicker::after { display:none; }
  /* .datepicker__container { height:316px; width:245px; margin:0 auto; } */
  .datepicker__container .daterangepicker { position:relative !important; top:auto !important; left:auto !important; float:left; margin-top:0; width:100%; }
  .datepicker__container { height: 318px; }
  /* .datepicker__container .daterangepicker .drp-calendar { box-sizing: border-box; width:50%; max-width:50%; } */
  .datepicker__input { width:340px; text-align:center; }
</style>



<form>
    <h4>Alege data sau perioada pentru pontare</h4>
    <br>
    <div class="datepicker__wrapper">
      <label>Perioada si timpul selectat:</label>
      <input class="datepicker__input js-datepicker__input">
      <br><br>
      <div class="datepicker__container js-datepicker__container"></div>
    </div>
    <br>
    <input class="btn btn-primary" type="submit" value="Adauga pontaj">
</form>



<script>
  /* Add datepicker within selected div */
  $(function() {
    // init daterangepicker 
    var picker = $('.js-datepicker__input').daterangepicker({
      "parentEl": ".js-datepicker__container",
      "timePicker": true,
      "alwaysShowCalendars": true,
      "applyButtonClasses": "btn-primary",
      "startDate": "08:00",
      "endDate": "17:00",
      "timePicker24Hour": true,
      "locale": {
        "format": 'HH:mm D/M/Y',
        "separator": " - ",
        "applyLabel": "Aplica",
        "cancelLabel": "Anuleaza",
        "fromLabel": "Din",
        "toLabel": "pana in",
        "customRangeLabel": "Personalizat",
        "weekLabel": "W",
        "daysOfWeek": [
            "Lu",
            "Ma",
            "Mi",
            "Jo",
            "Vi",
            "Sa",
            "Du"
        ],
        "monthNames": [
            "Ianuarie",
            "Februarie",
            "Martie",
            "Aprilie",
            "Mai",
            "Iunie",
            "Iulie",
            "August",
            "Septembrie",
            "Octombrie",
            "Noiembrie",
            "Decembrie"
        ],
        "firstDay": 0
      },
      "maxSpan": {
        "days": 30
      },
      ranges: {
        'Azi': [moment(), moment()],
        'Ieri': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Ultimele 7 zile': [moment().subtract(6, 'days'), moment()],
        'Ultimele 30 zile': [moment().subtract(29, 'days'), moment()],
        'Luna aceasta': [moment().startOf('month'), moment().endOf('month')],
        'Luna trecuta': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      }
    });
    // range update listener
    picker.on('apply.daterangepicker', function(ev, picker) {
      $(".js-datepicker__input").val(`${picker.startDate.format('HH:mm D/M/Y')} - ${picker.endDate.format('HH:mm D/M/Y')}`);
    });
    // prevent hide after range selection
    picker.data('daterangepicker').hide = function () {};
    // show picker on load
    picker.data('daterangepicker').show();
  });
</script>