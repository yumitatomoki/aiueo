$(function() {
  $.datepicker._gotoToday = function(id) {
    var target = $(id);
    var inst = this._getInst(target[0]);
    var date = new Date();
    this._setDate(inst, date);
    this._hideDatepicker();
  };
  var showAdditionalButton = function(input) {
    setTimeout(function() {
      var buttonPanel = $(input)
        .datepicker("widget")
        .find(".ui-datepicker-buttonpane"),

        btn = $('<button class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" type="button">クリア</button>');
      btn
        .unbind("click")
        .bind("click", function() {
          $.datepicker._clearDate(input);
        });

      btn.appendTo(buttonPanel);
    }, 1);
  };
  $('#datepicker01,#datepicker02,#datepicker03').datepicker({
    showButtonPanel: true,
    beforeShow: showAdditionalButton,
    onChangeMonthYear: showAdditionalButton,
    dateFormat: 'yy / mm / dd',
    monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
  });

  // 日本語化
  $.datepicker.regional['ja'] = {
    closeText: '閉じる',
    prevText: '<前',
    nextText: '次>',
    currentText: '今日',
    monthNames: ['1月', '2月', '3月', '4月', '5月', '6月',
      '7月', '8月', '9月', '10月', '11月', '12月'
    ],
    monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月',
      '7月', '8月', '9月', '10月', '11月', '12月'
    ],
    dayNames: ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'],
    dayNamesShort: ['日', '月', '火', '水', '木', '金', '土'],
    dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
    weekHeader: '週',
    dateFormat: 'yy/mm/dd',
    firstDay: 0,
    isRTL: false,
    showMonthAfterYear: true,
    yearSuffix: '年'
  };
  $.datepicker.setDefaults($.datepicker.regional['ja']);
});