<div class="container-fluid">
    <div class="row contact-details">
        <div class="col-md-4">

            <div class="row">
                <div class="col">
                    <div class="contact">
                        <div class="nota nota-1">
                            <i class="fa fa-phone"></i>
                            <span>
                                <strong>Call Us</strong>
                                <a href="tel:+919320063100">+91 8090 25 7557</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="contact">
                        <div class="nota">
                            <i class="fa fa-envelope"></i>
                            <span>
                                <strong>Email Us</strong>
                                <a id="email" href="mailto:">pathshala.kushinagar@gmail.com</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="contact">
                <div class="nota">
                    <i class="fa fa-map"></i>
                    <span>
                        <strong>Visit Us</strong>
                        <span>
                            PathShala - The Pre School,<br>
                            Kathkuiyan Road, Gunagar Patti,<br>
                            Kushinagar, U.P. 274304<br>
                        </span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col">
                    <div class="contact">
                        <div class="nota">
                            <i class="fa fa-clock-o"></i>
                            <span>
                                <strong>Timing</strong></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row contact">
                <div class="col nota-1">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Mon - Sat:</td>
                                <td>08:00 AM - 02:00 PM</td>
                            </tr>
                            <tr>
                                <td>Sunday:</td>
                                <td><span>Closed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




    </div>
</div>

<style>
.container-fluid {
    background: gray;
    color: white;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    box-sizing: border-box;
    position: relative;
    z-index: 1;
    font-size: .9rem;
}

.contact-details {
    /* background-color: gray; */
    padding: 15px 0;
}

.contact {
    height: 100%;
    display: flex;
    position: relative;
}

/* .contact-details>div:nth-last-child(1)>.contact:after {
    display: none;
} */

.contact a:hover {
    color: #fff !important;
    font-size: 15px;
}

.contact>.nota a {
    color: #ccc;
    font-weight: 800;
}

.contact>.nota {
    color: #ccc;
    text-decoration: none !important;
    display: flex;
    justify-content: center;
}

.contact>.nota-1 {
    margin-top: 10px;
    color: #ccc;
    text-decoration: none !important;
    display: flex;
    justify-content: center;
}

.contact>.nota-1>table th,
.table td {
    padding: 0 !important;
    vertical-align: middle !important;
}

.contact>.nota>i {
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 30px;
    padding-right: 65px;
    width:30px;
}

.contact>.nota>i:after {
    content: "";
    height: 25px;
    width: 2px;
    position: absolute;
    right: 25px;
    top: 2px;
    background-color: #f5f5f5;
}

.contact>.nota>span>strong {
    font-size: 18px;
    display: block;
    color: #fff;
    font-weight: 800;
}

.table {
    color: #ccc !important;
}

.table span {
    color: #900C3F;
}
</style>