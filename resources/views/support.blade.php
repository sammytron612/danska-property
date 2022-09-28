@extends('layouts.app')

<section style="margin-top: 60px" x-data="page()" id="support" class="contact mt-5">
    <div class="container">
        <div class="section-header">
            <h2>Support</h2>
            <p>Our support <span>hours</span></p>
        </div>
        <div class="pb-5 d-flex flex-column align-items-center">
            <h6>Weekdays 8am-8pm 019191918932</h6>
            <h6>Weekends 8am-2pm 983939389</h6>
            <h6>Live Chat 8am-8pm</h6>
            <button x-on:click="startChat" style="margin-left:0" class="btn-book-a-table px-3 py-1" type="submit">Live Chat</button>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success" role="alert">
                Your support request has been received, we will be in touch shortly!
            </div>
        @endif
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="d-none d-lg-block col">
                <img class="img-fluid rounded h-100" src="/assets/img/support.jpg" alt="union" class="show-tablet image-left-break" data-aos="fade-up">
            </div>

            <div class="col" data-aos="zoom-out">
                <form action="{{route('postMessage')}}" method="post" role="form" class="rounded h-100 mt-0 php-email-form p-3 p-md-4">
                    @csrf

                    <input type="hidden" name="type" value="support" />
                    <div class="row">
                      <div class="col-xl-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col-xl-6 form-group">
                        <input type="text" class="form-control" name="acc" id="acc" placeholder="Account no" required>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 form-group">
                          <input type="text" name="company_name" class="form-control" id="name" placeholder="Company Name" required>
                        </div>
                        <div class="col-xl-6 form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit">Submit Support Request</button></div>
                  </form>

            </div>
        </div>


        <div x-on:click.outside="chatBox = false" class="p-2" x-show="chatBox" id="chat-box">
            <div class="p-2 chat-box d-flex flex-column justify-content-end shadow">
                <div class="d-flex flex-column p-2" id="chat-content">
                    <!--<span class="chat-agent px-3 py-1">jlkjljl</span>-->
                    <!--<span class="chat-user px-3 py-1">jskds</span>-->
                </div>
                <div x-show="whisper" id="whisper" style="font-size: 10px" class="text-center">An agent is typing...</div>
                <div x-show="awaitingAgent" id="awaiting" style="font-size: 10px" class="text-center">An agent will be with you shortly..</div>
                <div class="form-group input-group d-flex w-100 mt-3 p-2 align-items-center">
                    <input x-model="chatText" class="rounded form-control mr-1" placeholder="Type message..." type="text">
                    <button class="ml-2 btn btn-danger" x-on:click="send">Send</button>
                </div>
            </div>
        </div>

    </div>

  </section><!-- End Contact Section -->


  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script>
    const delay = t => new Promise(resolve => setTimeout(resolve, t));

       function page() {
        return {
            expanded : false,
            chatBox: false,
            chatText: '',
            whisper: false,
            awaitingAgent: false,
            agent: null,
            nameAsked: false,
            intro: false,
            names: ['Darren', 'Lisa', 'James'],

            open(){
                this.chatBox = true
            },

            send(){

                if (!this.chatText) {
                    return
                }

                el = document.getElementById('chat-content')
                console.log(el)

                newChat = el = document.createElement('span');
                newChat.classList.add('chat-user','py-1','px-3')
                newChat.textContent = this.chatText;
                chatBox = document.getElementById('chat-content');
                chatBox.appendChild(newChat);

                if(this.nameAsked)
                {
                    name = this.chatText
                    this.nameAsk(name)

                }

                if(this.intro)
                {
                    this.dialogueReply()
                }
                this.chatText = ''

                //alert(this.chatText)

            },

            randomNumber(start,end){
                return Math.floor(Math.random() * end*100) + start*1000;
            },

            startChat(){
                this.chatBox = true
                this.awaitingAgent = true;
                waiting = this.randomNumber(30,60)
                delay(waiting).then(() => {
                    this.awaitingAgent = false
                    this.whisper = true

                    delay(4000).then(() => {
                        this.whisper = false
                        this.agent = this.names[Math.floor(Math.random() * 2)]
                        this.agentMessage('Hello my name is ' + this.agent)
                        this.whisper = true
                        delay(2000).then(() => {
                            this.agentMessage('Can I start by taking your name')
                            this.whisper = false
                            this.nameAsked = true
                        });

                    });

                });


            },

            agentMessage(text){
                el = document.getElementById('chat-content')
                console.log(el)

                newChat = el = document.createElement('span');
                newChat.classList.add('chat-agent','py-1','px-3')
                newChat.textContent = text;
                chatBox = document.getElementById('chat-content');
                chatBox.appendChild(newChat);
            },

            nameAsk(name){
                this.whisper = true
                delay(3000).then(() => {
                            this.agentMessage('Hello ' + name)
                            this.nameAsked = false
                            delay(3000).then(() => {
                                this.agentMessage('Can I please have your account number followed by the email address associated with your account please?')
                                this.whisper = false
                                this.intro = true
                            });

                        });


            },



            dialogueReply(){
                waiting = this.randomNumber(20,30)
                delay(waiting).then(() => {
                    this.agentMessage('Thankyou, just bringing up your account details')
                    waiting = this.randomNumber(30,60)
                    delay(10000).then(() => {
                        this.whisper = true
                        delay(10000).then(() => {
                            this.agentMessage('I cant seem to find those details! Are you sure they are correct?')
                            this.whisper = false
                        });

                    });

                });
            }
        }
    }
  </script>

