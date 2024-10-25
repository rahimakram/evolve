@extends('user.layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <!-- BANNER -->
    <section class="banner ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="my-breadcrumb">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">For Companies</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team Building Activities</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="mxw-800">
                        <h1>Team Building Activities</h1>
                        <p>Teamwork is crucial to any work environment. Evolve offers dynamic team-building activities
                            designed to strengthen bonds and enhance collaboration within companies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="tournament ptb-64">
        <div class="container">
            <div class="row align-items-center bg-white">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="p64">
                        <h3>Why are team building activities important?</h3>
                        <p>Team building activities play a vital role in fostering cohesion, collaboration, and productivity
                            within organizations. Investing in team building activities not only nurtures a positive work
                            environment but also lays the foundation for sustained success and growth within the
                            organization.<br><br>
                            Evolve is committed to helping companies harness the power of teamwork through engaging and
                            impactful activities that inspire synergy and drive results.</p>
                    </div>
                </div>
                <div class="col-md-6 pe-md-0 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
                    <div class="videos-box">
                        <img src="{{ URL::asset('dist/images/key-skills/key-bg.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="gallery ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="row mb-64">
                <div class="col-12">
                    <div class="mxw-800 text-center m-auto">
                        <h2>Unite, Connect, Evolve Together</h2>
                        <p>From trust-building exercises to problem-solving games, our diverse range of team-building
                            activities are tailored to suit the unique needs and preferences of each team, and aimed to
                            foster strong relationships, boost morale, and enhance teamwork within organizations.</p>
                    </div>
                </div>
            </div>


            <nav id="filter-team-building" class="filter-gallery">
                <div class="nav nav-tabs mb-64" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="creative-tab" data-bs-toggle="tab" data-bs-target="#creative"
                        type="button" role="tab" aria-controls="creative" aria-selected="true">Creative & Problem
                        Solving</button>
                    <button class="nav-link" id="strategy-tab" data-bs-toggle="tab" data-bs-target="#strategy"
                        type="button" role="tab" aria-controls="strategy" aria-selected="false">Strategy &
                        Communication</button>
                    <button class="nav-link" id="active-skills-tab" data-bs-toggle="tab" data-bs-target="#active-skills"
                        type="button" role="tab" aria-controls="active-skills" aria-selected="false">Active Skills &
                        Physical</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="creative" role="tabpanel" aria-labelledby="creative-tab">
                    <div class="row">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/creative-1.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Magazine Cover Story</h5>
                                    <p class="card-text">Get ready for a thrilling team activity! Unleash your creativity as
                                        each team crafts an imaginary magazine cover story highlighting a successful project
                                        or business achievement for your company. Dive into the creative process by
                                        selecting the perfect images, crafting captivating headlines, and formulating
                                        inspiring quotes. This exercise not only sparks creativity but also encourages your
                                        team to envision greater possibilities for your company's success, making it a fun
                                        and engaging way to inspire innovation and teamwork.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/creative-2.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Marshmallow Spaghetti Tower</h5>
                                    <p class="card-text">Get ready for an exciting team challenge! Armed with only tape,
                                        marshmallows, string, scissors, and spaghetti, teams will compete to build the
                                        tallest tower. But here's the twist: the tower must support a marshmallow at its
                                        peak and stand on its own for five seconds. This fun and interactive activity will
                                        test your team's creativity, ingenuity, and teamwork. Who will rise to the occasion
                                        and build the most impressive tower?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/creative-3.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Interactive Quiz</h5>
                                    <p class="card-text">Experience an interactive online quiz that brings your audience
                                        closer to the topics in a fun and engaging manner. Whether it's general knowledge,
                                        industry-focused, or a mix of both, this quiz will captivate participants. Scores
                                        are calculated based on accuracy and time, adding an exciting competitive edge. With
                                        a running score counter, participants can track their performance in real-time,
                                        fuelling the excitement and keeping everyone on their toes. Collaborating with
                                        Evolve, we'll craft a list of questions tailored to your audience, ensuring a
                                        memorable and enjoyable experience for all.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="strategy" role="tabpanel" aria-labelledby="strategy-tab">
                    <div class="row mb-64">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-1.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Barter Puzzle</h5>
                                    <p class="card-text">Prepare for a thrilling challenge! Each group receives a jigsaw
                                        puzzle of the same difficulty level and the race is on to see which group can
                                        complete it the fastest.
                                        But here's the twist: some pieces from each puzzle are mixed into other groups'
                                        puzzles. It's up to the teams to strategize and negotiate to retrieve these pieces —
                                        whether through trading, exchanging team members, or other creative means.
                                        This dynamic activity will test teamwork and communication skills, as some team
                                        members may take the lead while others offer support. The key is to make decisions
                                        collectively as a team, making this a truly collaborative and exciting experience!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-2.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Shark Tank</h5>
                                    <p class="card-text">Get ready to unleash your inner entrepreneur! Each team will
                                        brainstorm and develop an imaginary product, crafting a compelling pitch to present
                                        to a panel of "investors.
                                        Your pitch must be polished and professional, including essential elements such as a
                                        brand name and slogan, a robust business and marketing strategy, and detailed
                                        financial data predicting sales, market size, and profit margins.
                                        The "investors" (played by senior management) will grill teams with questions,
                                        evaluating pitches as if they were real businesses. If a pitch shows promise, the
                                        "Sharks" can choose to invest, adding a thrilling element of competition.
                                        The team that secures the most "investment" wins, making this a high-stakes,
                                        immersive activity that will test your creativity, strategic thinking, and
                                        presentation skills!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-3.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Lost In the Desert</h5>
                                    <p class="card-text">Lost in the desert is a situational challenge where participants
                                        are lost in the desert after a plane crash, 300 km away from closest city. After the
                                        crash, they have found 15 objects that they can use to survive.
                                        First individually, then in group they have to come up with a survival strategy and
                                        rank objects 1-15 according to their importance for survival. One leader will be
                                        chosen for each group who will present their final decision and strategy on
                                        survival.
                                        A situation-based team exercise, focused on collective identifying of the best
                                        strategy, effective use of available resources, cooperation, effective communication
                                        and leadership.
                                        The objective is to become a better decision-maker by understanding that we need to
                                        remove cognitive biases that stop us from making effective decisions.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-4.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Team Portrait</h5>
                                    <p class="card-text">Embark on a unique and insightful journey with our workshop
                                        format, featuring three engaging mini-sessions. Begin by selecting your favourite
                                        animal and sharing why it resonates with you, offering a glimpse into how others
                                        perceive you and how you aspire to be seen.
                                        The highlight of the workshop is an artistic coaching exercise, where the team
                                        collaborates to create a collective portrait. Each participant is represented by
                                        their chosen animal, fostering a deeper understanding and connection within the
                                        team.
                                        This session is designed to enhance communication among team members, fostering a
                                        stronger sense of camaraderie and inspiring more effective teamwork. Get ready to
                                        explore new perspectives and forge meaningful connections with your colleagues!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-5.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">My Team, My Tribe</h5>
                                    <p class="card-text">Unite your team and enhance collaboration with our workshop
                                        inspired by ancient tribal principles. Participants will create a company motto and
                                        develop a unique alphabet using a set of symbols, fostering a sense of unity and
                                        common purpose.
                                        This scientifically proven exercise promotes strong cohesion and collaborative
                                        mindsets, increasing engagement and cooperation within your team. Join us to
                                        strengthen your team's bond and work towards your common goals more effectively!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-6.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Emotive Playdough</h5>
                                    <p class="card-text">Enhance your team's communication and emotional intelligence with
                                        our innovative workshop. Participants will sculpt hand-moulded sculptures to
                                        visualize and channel negative emotions, promoting stress relief and emotional
                                        coping strategies.
                                        Discover the benefits of incorporating creative activities and hobbies into your
                                        life, inspiring positive emotions and fostering a more harmonious team dynamic.
                                        Learn to manage emotions in a less reactive way, replacing reactive behaviour with
                                        productive responses.
                                        Join us to boost emotional intelligence and promote positive interactions within
                                        your team!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="active-skills" role="tabpanel" aria-labelledby="active-skills-tab">
                    <div class="row mb-64">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/active-1.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">African Drumming Circle</h5>
                                    <p class="card-text">Drums have been used for centuries to unite people in celebration,
                                        mark important occasions and for communication and healing. Drumming is stress
                                        release for the mind, body and soul.
                                        The collaboration in a facilitated drum circle offers insight into the workings of a
                                        team. One can see how an individual’s energy affects the group and ultimately how
                                        the overall energy of a group affects its performance. Imagine the power of your
                                        whole organisation drumming together!
                                        Immerse yourself in a musical collaboration that is uplifting and inspiring! Release
                                        the magic of group energy in the ultimate experience of unity and team building!
                                        Drums are given to everyone and within fifteen minutes the group becomes a drum
                                        ensemble working in concert to create beautiful music.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/active-2.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Go Green & Go Clean</h5>
                                    <p class="card-text">Join us for a thrilling vegetarian or vegan cooking competition
                                        that goes beyond the kitchen! Led by a Head Chef from a leading health food chain in
                                        Qatar, this workshop aims to instill healthy eating habits and raise awareness about
                                        food choices.
                                        Participants will showcase their creativity and nutritional knowledge in this timed
                                        cooking competition, where they will be judged on a variety of criteria. Get ready
                                        to test your culinary skills and embark on a delicious journey towards healthier
                                        living!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/active-3.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Thai Cooking Class</h5>
                                    <p class="card-text">Get ready for a feast of flavors as talented chefs from all over
                                        Thailand gather for an exhilarating and authentic Thai salad-making competition
                                        hosted at a 5* Hotel in Doha.
                                        The session will begin with a Mocktail Mixing Masterclass where participants get to
                                        test their taste buds and start the day with a refreshing beverage.
                                        The air is filled with the aromatic blend of herbs and spices as these culinary
                                        wizards showcase their creativity and expertise.
                                        Your team of trainee chefs will get a chance to create their own culinary
                                        masterpiece. Each team will be in competition to create the best dish because after
                                        all the head chef will be scoring the best dishes.
                                        Vibrant colors and enticing textures come together in a tantalizing dance,
                                        transforming humble vegetables into works of art. With each toss and sprinkle, the
                                        competitors demonstrate their precision and passion</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-64">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/active-4.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Padel Tournament</h5>
                                    <p class="card-text">Discover the thrill of padel, a dynamic sport that blends the best
                                        of tennis and squash! Whether you're looking for a casual game with friends or
                                        aiming to spark some healthy competition with a company tournament, Evolve Wellness
                                        can organize the perfect padel experience for you. Our team includes seasoned padel
                                        experts from Spain, ready to provide coaching for beginners or referee matches for a
                                        memorable tournament.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/active-5.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Target Shooting</h5>
                                    <p class="card-text">This exciting sport combines skill and precision, offering a
                                        unique and memorable experience for everyone involved. Experienced instructors will
                                        ensure a safe and enjoyable experience for all participants, providing coaching for
                                        beginners and overseeing friendly competitions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/active-6.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Picasso</h5>
                                    <p class="card-text">Engage your team in a thrilling guessing game that encourages
                                        communication and teamwork! In this activity, one team member will draw a series of
                                        pictures without revealing what each drawing represents. The rest of the team must
                                        guess what is being drawn within a set time limit, racing against the clock to
                                        achieve their maximum score of correct guesses.
                                        Each correct guess earns the team a point, adding to the excitement and
                                        competitiveness of the game. This activity is perfect for corporate clients looking
                                        to promote collaboration and problem-solving skills in a fun and interactive way.
                                        Are you ready to put your team's guessing skills to the test?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-64">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/active-7.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Helium Sticks</h5>
                                    <p class="card-text">Engage your team in an exciting and challenging activity with the
                                        Helium Stick challenge! Team members must work together to lower the Helium Stick to
                                        the ground using only their index fingers, aiming to score points for each
                                        successful drop. This activity requires excellent coordination and communication
                                        skills, especially under the pressure of competing against the clock. It's a fun and
                                        interactive way to promote teamwork and problem-solving among your team</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/active-8.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Maze</h5>
                                    <p class="card-text">Embark on a collaborative journey with our labyrinth challenge!
                                        Your team will face the exciting task of discovering a hidden path through a
                                        labyrinth. Represented by a grid on the floor, the path consists of a series of
                                        connected squares that must be navigated from one end to the other.
                                        Team members must work together to find the correct path, as stepping off the path
                                        will require them to start again. This exercise encourages teamwork,
                                        problem-solving, and effective communication.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-3.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Interactive Quiz</h5>
                                    <p class="card-text">Experience an interactive online quiz that brings your audience
                                        closer to the topics in a fun and engaging manner. Whether it's general knowledge,
                                        industry-focused, or a mix of both, this quiz will captivate participants. Scores
                                        are calculated based on accuracy and time, adding an exciting competitive edge. With
                                        a running score counter, participants can track their performance in real-time,
                                        fuelling the excitement and keeping everyone on their toes. Collaborating with
                                        Evolve, we'll craft a list of questions tailored to your audience, ensuring a
                                        memorable and enjoyable experience for all.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-64">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-1.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Magazine Cover Story</h5>
                                    <p class="card-text">Get ready for a thrilling team activity! Unleash your creativity
                                        as each team crafts an imaginary magazine cover story highlighting a successful
                                        project or business achievement for your company. Dive into the creative process by
                                        selecting the perfect images, crafting captivating headlines, and formulating
                                        inspiring quotes. This exercise not only sparks creativity but also encourages your
                                        team to envision greater possibilities for your company's success, making it a fun
                                        and engaging way to inspire innovation and teamwork.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-2.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Marshmallow Spaghetti Tower</h5>
                                    <p class="card-text">Get ready for an exciting team challenge! Armed with only tape,
                                        marshmallows, string, scissors, and spaghetti, teams will compete to build the
                                        tallest tower. But here's the twist: the tower must support a marshmallow at its
                                        peak and stand on its own for five seconds. This fun and interactive activity will
                                        test your team's creativity, ingenuity, and teamwork. Who will rise to the occasion
                                        and build the most impressive tower?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-3.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Interactive Quiz</h5>
                                    <p class="card-text">Experience an interactive online quiz that brings your audience
                                        closer to the topics in a fun and engaging manner. Whether it's general knowledge,
                                        industry-focused, or a mix of both, this quiz will captivate participants. Scores
                                        are calculated based on accuracy and time, adding an exciting competitive edge. With
                                        a running score counter, participants can track their performance in real-time,
                                        fuelling the excitement and keeping everyone on their toes. Collaborating with
                                        Evolve, we'll craft a list of questions tailored to your audience, ensuring a
                                        memorable and enjoyable experience for all.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-1.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Magazine Cover Story</h5>
                                    <p class="card-text">Get ready for a thrilling team activity! Unleash your creativity
                                        as each team crafts an imaginary magazine cover story highlighting a successful
                                        project or business achievement for your company. Dive into the creative process by
                                        selecting the perfect images, crafting captivating headlines, and formulating
                                        inspiring quotes. This exercise not only sparks creativity but also encourages your
                                        team to envision greater possibilities for your company's success, making it a fun
                                        and engaging way to inspire innovation and teamwork.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-2.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Marshmallow Spaghetti Tower</h5>
                                    <p class="card-text">Get ready for an exciting team challenge! Armed with only tape,
                                        marshmallows, string, scissors, and spaghetti, teams will compete to build the
                                        tallest tower. But here's the twist: the tower must support a marshmallow at its
                                        peak and stand on its own for five seconds. This fun and interactive activity will
                                        test your team's creativity, ingenuity, and teamwork. Who will rise to the occasion
                                        and build the most impressive tower?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                            <div class="card">
                                <img src="{{ URL::asset('dist/images/team-building/strategy-3.png') }}" class="img-fluid"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Interactive Quiz</h5>
                                    <p class="card-text">Experience an interactive online quiz that brings your audience
                                        closer to the topics in a fun and engaging manner. Whether it's general knowledge,
                                        industry-focused, or a mix of both, this quiz will captivate participants. Scores
                                        are calculated based on accuracy and time, adding an exciting competitive edge. With
                                        a running score counter, participants can track their performance in real-time,
                                        fuelling the excitement and keeping everyone on their toes. Collaborating with
                                        Evolve, we'll craft a list of questions tailored to your audience, ensuring a
                                        memorable and enjoyable experience for all.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="quote ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mxw-800 text-center m-auto">
                        <div class="quote-img"><img src="{{ URL::asset('dist/images/sports-management/Quote.png') }}"
                                class="img-fluid" alt=""></div>
                        <h4>Our team had the pleasure of working with Evolve, and the impact was beyond incredible!</h4>
                        <h5>Ahmad Ali</h5>
                        <h6>AQatar Company</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ready-to-evolve ptb-128 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2s">
                    <div class="ready-to-evolve-content mxw-800 p64">
                        <h3>Ready to Plan Your Next Event?</h3>
                        <p>Give us a call, and let’s discuss how we can create an inspiring and motivating experience that
                            will propel your team forward for the rest of the year.</p>
                        <a href="#" class="btn btn-schedule">Get in Touch <span class="ps-3"><img
                                    src="{{ URL::asset('dist/images/fitness-classes/Right.png') }}" class="img-fluid"
                                    alt=""></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
