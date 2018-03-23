<?php
/**
header
 */
include "header.php";
?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-5 mt-5 text-info">Algorithms</h1>
                <hr style="width: 100%;">
                <article>
                    <p class="text-lead text-capitalize mt-2 text-success">

                        In mathematics and computer science, an algorithm (Listeni/ˈælɡərɪðəm/ AL-gə-ri-dhəm) is a self-contained sequence of actions to be performed.
                        Algorithms can perform calculation, data processing and automated reasoning tasks.An algorithm is an effective method that can be expressed within
                        a finite amount of space and time and in a well-defined formal language for calculating a function. Starting from an initial state and initial
                        input (perhaps empty),the instructions describe a computation that, when executed, proceeds through a finite number of well-defined successive states,
                        eventually producing "output and terminating at a final ending state. The transition from one state to the next is not necessarily deterministic;
                        some algorithms, known as randomized algorithms, incorporate random input..
                    </p>
                </article>
                <article>
                    <header><h5 class="text-danger" style="border-left: 5px solid orange">Informal definition</h5></header>
                    <p class="text-lead text-capitalize mt-2 text-success">

                        No human being can write fast enough, or long enough, or small enough ( "smaller and smaller without limit
                        ...you'd be trying to write on molecules, on atoms, on electrons") to list all members of an enumerably
                        infinite set by writing out their names, one after another, in some notation. But humans can do something
                        equally useful, in the case of certain enumerably infinite sets: They can give explicit instructions for
                        determining the nth member of the set, for arbitrary finite n. Such instructions are to be given quite explicitly,
                        in a form in which they could be followed by a computing machine, or by a human who is capable of carrying out
                        only very elementary operations on symbols.

                    </p>
                </article>
                <article>
                    <p class="text-lead text-capitalize mt-2 text-success">
                        An "enumerably infinite set" is one whose elements can be put into one-to-one correspondence with the integers.
                        Thus, Boolos and Jeffrey are saying that an algorithm implies instructions for a process that "creates" output
                        integers from an arbitrary "input" integer or integers that, in theory, can be arbitrarily large. Thus an algorithm
                        can be an algebraic equation such as y = m + n – two arbitrary "input variables" m and n that produce an output y.
                        But various authors' attempts to define the notion indicate that the word implies much more than this,
                        something on the order of (for the addition example
                    </p>
                </article>
                <article>
                    <p  class="text-lead text-capitalize mt-2 text-success">
                        Precise instructions (in language understood by "the computer") for a fast, efficient, "good" process that specifies
                        the "moves" of "the computer" (machine or human, equipped with the necessary internally contained information and capabilities)
                        to find, decode, and then process arbitrary input integers/symbols m and n, symbols + and = ... and "effectively"produce,
                        in a "reasonable" time, output-integer y at a specified place and in a specified format.
                    </p>
                </article>
                <article>
                    <p  class="text-lead text-capitalize mt-2 text-success">

                        Typically, when an algorithm is associated with processing information, data can be read from an input source,
                        written to an output device and stored for further processing. Stored data are regarded as part of the internal
                        state of the entity performing the algorithm. In practice, the state is stored in one or more data structures.
                        For some such computational process, the algorithm must be rigorously defined: specified in the way it applies in
                        all possible circumstances that could arise. That is, any conditional steps must be systematically dealt with
                        case-by-case; the criteria for each case must be clear (and computable).Because an algorithm is a precise
                        list of precise steps, the order of computation is always crucial to the functioning of the algorithm.
                        Instructions are usually assumed to be listed explicitly, and are described as starting "from the top"
                        and going "down to the bottom",an idea that is described more formally by flow of control.So far, this
                        discussion of the formalization of an algorithmhas assumed the premises of imperative programming.
                        This is the most common conception, and it attempts to describe a taskin discrete, "mechanical" means.
                        Unique to this conception of formalized algorithms is the assignment operation, settingthe value of a variable.
                        It derives from the intuition of "memory" as a scratchpad. There is an example below of such an assignment.

                    </p>
                </article>
            </div>
            <div class="col-md-4">

                <div class="card card-block hidden-sm-down mt-5">
                    <h5 class="card-title">Archives</h5>
                    <div class="list-group">
                        <button type="button" class="list-group-item">Data Structure</button>
                        <button type="button" class="list-group-item">Numerical analysis</button>
                        <button type="button" class="list-group-item">Algorithm</button>
                        <button type="button" class="list-group-item">Logic in computer science</button>
                        <button type="button" class="list-group-item">Data analysis</button>
                    </div>
                    <div class="m-t-1"><a href="http://www.geeksforgeeks.org/">See More</a></div>
                </div>
                <div class="card card-block hidden-sm-down">
                    <h5 class="card-title">Categories</h5>
                    <div class="list-group">
                        <button type="button" class="list-group-item">Python</button>
                        <button type="button" class="list-group-item">Java</button>
                        <button type="button" class="list-group-item text-capitalize">java script</button>
                        <button type="button" class="list-group-item">Ruby</button>
                        <button type="button" class="list-group-item">Brain Fuck</button>
                    </div>
                    <div class="m-t-1"><a href=" http://www.geeksforgeeks.org/">View More</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="carousel slide" data-ride="carousel" id="sildi">
                    <ol class="carousel-indicators">
                        <li data-target="mobile" data-slide-to="0" class="active"></li>
                        <li data-target="mobile" data-slide-to="1"></li>
                        <li data-target="mobile" data-slide-to="2"></li>
                        <li data-target="mobile" data-slide-to="3"></li>
                        <li data-target="mobile" data-slide-to="4"></li>
                        <li data-target="mobile" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid ml-auto mr-auto" src="https://images.pexels.com/photos/34521/space-shuttle-lift-off-liftoff-nasa.jpg?w=940&h=650&auto=compress&cs=tinysrgb">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid ml-auto mr-auto" src="https://images.pexels.com/photos/2166/flight-sky-earth-space.jpg?w=940&h=650&auto=compress&cs=tinysrgb">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid ml-auto mr-auto" src="https://images.pexels.com/photos/177598/pexels-photo-177598.jpeg?w=940&h=650&auto=compress&cs=tinysrgb">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid ml-auto mr-auto" src="https://images.pexels.com/photos/2156/sky-earth-space-working.jpg?w=940&h=650&auto=compress&cs=tinysrgb">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid ml-auto mr-auto" src="https://images.pexels.com/photos/2163/sea-flight-sky-earth.jpg?w=940&h=650&auto=compress&cs=tinysrgb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php

//fotter

include "footer.php";
?>