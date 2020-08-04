<script type="text/javascript" >
    var questions=
[                                       
    @foreach($question_category->questions->shuffle() as $question)
    [
        "{{$question->name}}",   
        @foreach($question->options as $option)                                                                                                                                                                                                                                    
        " {{$option->name}}",                                                                                
        @endforeach 
        "{{$question->answer}}"                                           
                                                                                
    ],
    @endforeach
];
</script>