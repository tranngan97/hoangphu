function triggerSubmit(event, answer)
{
    event.preventDefault();
    event.stopPropagation();
    var correctArray = [],
        correctCount = 0;
    var answerArray = answer.split(',');
    answerArray.forEach(function (answerValue) {
        correctArray[answerValue.slice(0, 1)] = answerValue.slice(1, 2);
    })
    var data = $(event.target).serialize();
    var dataArray = data.split("&");
    dataArray.forEach(function (value) {
        var answer = value.replace('_answer=', '');
        if (answer.slice(1, 2) === correctArray[answer.slice(0, 1)]) {
            correctCount++;
        }
    })

    var html = '<div style="font-size: 2rem;margin-bottom: 3%; color: #931515d4;"><span>Chấm điểm: </span>' + '<span>'+ correctCount + '/'+ answerArray.length + '</span>';
    var htmlAnswer = '<div style="font-size: 2rem;margin-bottom: 5%; color: #931515d4;"><span>Đáp án: </span>' + '<span>'+ answer + '</span>';
    var htmlButton = '<button class="button secondary" onclick="location.reload()">Làm lại</button>';
    $('.answer-box').append(html);
    $('.answer-box').append(htmlAnswer);
    $('.answer-box').append(htmlButton);
    $('#answer-form').hide();
}
function openLoginPopup() {

}
