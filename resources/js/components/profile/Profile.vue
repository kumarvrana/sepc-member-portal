<template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="#" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fa fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active show" href="#basic_details" data-toggle="tab">Basic Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="#company_details" data-toggle="tab">Company Info</a></li>
                  <li class="nav-item"><a class="nav-link" href="#branches" data-toggle="tab">Branches</a></li>
                  <li class="nav-item"><a class="nav-link" href="#partners" data-toggle="tab">Partners</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active show" id="basic_details">
                   <form @submit.prevent="addBasicInfo" class="form-horizontal">
                      <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Applicant Name</label>

                        <div class="col-sm-10">
                          <input type="text" v-model="basic.name" class="form-control" id="inputName" name="name" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="officer_name" class="col-sm-2 control-label">Officer Name</label>
                        <div class="col-sm-10">
                          <input type="text" v-model="basic.officer_name" class="form-control" id="inputName" name="officer_name" placeholder="Officer Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="designation" class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-10">
                          <input type="text" v-model="basic.designation" class="form-control" id="inputName" name="designation" placeholder="Designation">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" v-model="basic.email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="company" class="col-sm-2 control-label">Company</label>
                        <div class="col-sm-10">
                          <input type="text" v-model="basic.company" class="form-control" id="company" name="company" placeholder="Company Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="phone" class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input type="text" v-model="basic.phone" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="registed_address" class="col-sm-2 control-label">Registed Address</label>
                        <div class="col-sm-10">
                          <textarea v-model="basic.registed_address" class="form-control" id="registed_address" name="registed_address" placeholder="registed address"></textarea>
                        </div>
                      </div>   
                      <div class="form-group">
                        <label for="iecode" class="col-sm-2 control-label">Importer Exporter Code:</label>

                        <div class="col-sm-10">
                          <input type="text" v-model="basic.iecode" class="form-control" id="iecode" name="iecode" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="ieauthority" class="col-sm-2 control-label">Importer Exporter Authority:</label>
                        <div class="col-sm-10">
                          <input type="text" v-model="basic.ieauthority" class="form-control" id="ieauthority" name="ieauthority" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="iecissuedate" class="col-sm-2 control-label">Importer Exporter Issue Date:</label>
                        <div class="col-sm-10">
                          <input type="date" v-model="basic.iecissuedate" class="form-control" id="iecissuedate" name="iecissuedate" placeholder="date">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="iecestablishment" class="col-sm-2 control-label">Importer Exporter Establishment Date:</label>
                        <div class="col-sm-10">
                          <input type="date" v-model="basic.iecestablishment" class="form-control" id="iecestablishment" name="iecestablishment" placeholder="establishment date">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="pan_card" class="col-sm-2 control-label">Pan Card Number</label>
                        <div class="col-sm-10">
                          <input type="text" v-model="basic.pan_card" class="form-control" id="pan_card" placeholder="Pan Card Number">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="company_details">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                          <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <li class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </li>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <li>
                        <i class="fa fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="#" alt="..." class="margin">
                            <img src="#" alt="..." class="margin">
                            <img src="#" alt="..." class="margin">
                            <img src="#" alt="..." class="margin">
                          </div>
                        </div>
                      </li>
                      <!-- END timeline item -->
                      <li>
                        <i class="fa fa-clock-o bg-gray"></i>
                      </li>
                    </ul>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="branches">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Branches List</h3>

                        <div class="card-tools">
                            <button class="btn btn-success add-button" @click="newBranchModal()">Add Branch<i class="fas fa-user-plus fa-fw add-button"></i></button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                          <tbody>
                            <tr>
                              <th>ID</th>
                              <th>Branch Code</th>
                              <th>Branch Address</th>                                
                              <th>Modify</th>
                          </tr>


                          <tr v-for="branch in branch.data" :key="branch.id">

                            <td>{{branch.id}}</td>
                            <td>{{branch.code}}</td>
                            <td>{{branch.name}}</td>
                            <td>
                                <a href="#" @click="editBranchModal(branch)">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#" @click="deleteBranch(branch.id)">
                                    <i class="fa fa-trash red"></i>
                                </a>

                            </td>
                          </tr>
                        </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                      
                    </div>
                    
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="partners">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Partners List</h3>

                        <div class="card-tools">
                            <button class="btn btn-success" @click="newModal">Add Partner<i class="fas fa-user-plus fa-fw add-button"></i></button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                          <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Designation</th>
                                <th>Partner's Name</th>
                                <th>Father's/Husband's Name</th>
                                <th>Residential Address</th>
                                <th>Mobile Number </th>
                                <th>Modify</th>
                          </tr>


                          <tr v-for="partner in partner.data" :key="partner.id">
                            <td>{{partner.id}}</td>
                            <td>{{partner.desig_id}}</td>
                            <td>{{partner.title}} {{partner.name}}</td>
                            <td>{{partner.relation}} {{partner.relative}}</td>
                            <td>{{partner.address}}</td>
                            <td>{{partner.mobile}}</td>
                            <td>
                                <a href="#" @click="editModal(partner)">
                                    <i class="fa fa-edit blue"></i>
                                </a>
                                /
                                <a href="#" @click="deletePartner(partner.id)">
                                    <i class="fa fa-trash red"></i>
                                </a>

                            </td>
                          </tr>
                        </tbody></table>
                      </div>
                      <!-- /.card-body -->
                      
                    </div>
                   
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <div class="modal fade" id="addNewPartner" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 v-if="!editmode" class="modal-title" id="addNewLabel">Add New Partner</h5>
                    <h5 v-if="editmode" class="modal-title" id="addNewLabel">Update Partner</h5>                  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="editmode ? editPartner() : addNewPartner()">
                <div class="modal-body">
                     <div class="form-group">
                       <input v-model="loggedinUser" type="hidden" name="user_id">
                       <select name="desig_id" v-model="partners.desig_id" id="desig_id" class="form-control" :class="{ 'is-invalid': partners.errors.has('desig_id') }">
                            <option value="">--Select--</option>
                            <option v-for="desi in desigations.data" :key="desi.id" v-bind:value="desi.desig_id">{{desi.designation}}</option>
                        </select>
                        <has-error :form="partners" field="desig_id"></has-error> 
                    </div>

                     <div class="form-group">
                        <select name="title" v-model="partners.title" id="title" class="form-control" :class="{ 'is-invalid': partners.errors.has('title') }">
                            <option value="">--Select--</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Dr">Dr</option>
                        </select>
                        <has-error :form="partners" field="title"></has-error>                        
                    </div>
                    <div class="form-group">
                        <input v-model="partners.name" type="text" name="name"
                            placeholder="Partner's Name"
                            class="form-control" :class="{ 'is-invalid': partners.errors.has('name') }">
                        <has-error :form="partners" field="name"></has-error>
                    </div>
                     <div class="form-group">
                         <select name="relation" v-model="partners.relation" id="relation" class="form-control" :class="{ 'is-invalid': partners.errors.has('relation') }">
                            <option value="">--Select--</option>
                            <option value="S/O">S/O</option>
                            <option value="D/O">D/O</option>
                            <option value="W/O">W/O</option>
                        </select>
                        <has-error :form="partners" field="relation"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="partners.relative" type="text" name="relative"
                            placeholder="Partner's Father/husband Name (also use title along with name)"
                            class="form-control" :class="{ 'is-invalid': partners.errors.has('relative') }">
                        <has-error :form="partners" field="relative"></has-error>
                    </div>
                     <div class="form-group">
                        <textarea v-model="partners.address" name="address" id="address"
                        placeholder="Partner's Full Address"
                        class="form-control" :class="{ 'is-invalid': partners.errors.has('address') }"></textarea>
                        <has-error :form="partners" field="address"></has-error>
                    </div>
                     <div class="form-group">
                        <input v-model="partners.mobile" type="text" name="mobile"
                            placeholder="Mobile"
                            class="form-control" :class="{ 'is-invalid': partners.errors.has('mobile') }">
                        <has-error :form="partners" field="mobile"></has-error>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button v-if="editmode" type="submit" class="btn btn-primary">Update</button>
                    <button v-if="!editmode" type="submit" class="btn btn-primary">Create</button>
                </div>

                </form>

                </div>
            </div>
            </div>
            
        <div class="modal fade" id="addNewBranch" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 v-if="!editbranchmode" class="modal-title" id="addNewLabel">Add New Branch</h5>
                <h5 v-if="editbranchmode" class="modal-title" id="addNewLabel">Update Branch</h5>                    
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form @submit.prevent="editbranchmode ? editBranch() : addNewBranch()">
            <div class="modal-body">
              <div class="form-group">
                <input v-model="loggedinUser" type="hidden" name="user_id">
                <input v-model="branches.code" type="text" name="code"
                      placeholder="Branch Code"
                      class="form-control" :class="{ 'is-invalid': branches.errors.has('code') }">
                <has-error :form="branches" field="code"></has-error>
              </div>                
              <div class="form-group">
                  <textarea v-model="branches.name" name="name" id="name"
                  placeholder="Branch's Full Address"
                  class="form-control" :class="{ 'is-invalid': branches.errors.has('name') }"></textarea>
                  <has-error :form="branches" field="name"></has-error>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button  v-if="editbranchmode" type="submit" class="btn btn-primary">Update</button>
                <button  v-if="!editbranchmode" type="submit" class="btn btn-primary">Create</button>
            </div>

            </form>

          </div>
        </div>
      </div>
    
    </section>
    
</template>

<script>
    export default {
      data() {
            return {
                editmode: false,
                editbranchmode: false,
                loggedinUser: '',
                desigations: [],
                users : {},
                partner: {},
                branch: {},
                basic: new Form({
                    id:'',
                    name : '',
                    officer_name: '',
                    email: '',                    
                    iecode: '',
                    campany: '',
                    phone: '',
                    pan_card: '',
                    designation: '',                    
                    registed_address: '',
                    ieauthority: '',
                    iecissuedate: '',
                    iecestablishment: '',
                }),
              company_details: new Form({
                    company_type: '',
                    startup_company: '',
                    service: '',
                    other_service_des: ''
              }),
              partners: new Form({
                id: '',
                desig_id: '',
                title: '',
                name: '',
                relation: '',
                relative: '',
                address: '',
                mobile: ''
              }),
              branches: new Form({
                id: '',
                code: '',
                name: ''
              }),
            }
        },
        methods: {
          getLoggedinUserInfo() {
            axios.get('api/profile')
                .then(response => {
                   this.basic = response.data;
                   this.loggedinUser = response.data.id;
                })
                .catch(error =>{

                });
          },
          //load designations
          loadDesignations(){
            axios.get('api/designations')
              .then(response => {
                this.desigations = response;
              })
              .catch(error =>{

              });
          },

          //partners code

          editPartner(){
            this.$Progress.start();
            //console.log(this.branches.id);
            this.partners.put('api/partner/'+this.partners.id)
            .then(response => {
              this.$Progress.finish();
              $('#addNewPartner').modal('hide'); 
              this.$eventHub.emit('BranchCreated');
              toast({
                type: 'success',
                title: 'Partner Updated in successfully'
              });             
            })
            .catch(error => {
              this.$Progress.fail();
            })
          },
          deletePartner(id){
            swal({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  // Send request to the server
                if (result.value) {
                  this.$Progress.start();
                  this.partners.delete('api/partner/'+id)
                  .then(()=>{
                    swal(
                    'Deleted!',
                    'Your Partner has been deleted.',
                    'success'
                    )
                    this.$eventHub.emit('BranchCreated');
                    this.$Progress.finish();
                  })
                  .catch(()=> {
                    swal("Failed!", "There was something wronge.", "warning");
                    this.$Progress.fail();
                  });
                }
              })
          },
          loadPartners(){
            axios.get("api/partners").then(({ data }) => {
                this.partner = data;
              });
          },

          editModal(partner){
            this.editmode = true;
            this.partners.reset();
            $('#addNewPartner').modal('show');
            this.partners.fill(partner);
          },
          newModal(){
            this.editmode = false;
            this.partners.reset();
            $('#addNewPartner').modal('show');
          },

          //add branch
          addNewPartner(){
            this.$Progress.start();
            
            this.partners.post('api/partner')
              .then(response => {
                this.$Progress.finish();
                $('#addNewPartner').modal('hide');                
                toast({
                  type: 'success',
                  title: 'Partner Created in successfully'
                });
                this.$eventHub.emit('BranchCreated');
              })
              .catch(error => {
                this.$Progress.fail();
              })
          },

          //end partner code

          //branch code
          editBranch(){
            this.$Progress.start();
            //console.log(this.branches.id);
            this.branches.put('api/branch/'+this.branches.id)
            .then(response => {
              this.$Progress.finish();
              $('#addNewBranch').modal('hide'); 
              this.$eventHub.emit('BranchCreated');
              toast({
                type: 'success',
                title: 'Branch Updated in successfully'
              });             
            })
            .catch(error => {
              this.$Progress.fail();
            })
          },
          deleteBranch(id){
            swal({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  // Send request to the server
                if (result.value) {
                  this.$Progress.start();
                  this.branches.delete('api/branch/'+id).then(()=>{
                          swal(
                          'Deleted!',
                          'Your Branch has been deleted.',
                          'success'
                          )
                      this.$eventHub.emit('BranchCreated');
                      this.$Progress.finish();
                  }).catch(()=> {
                      swal("Failed!", "There was something wronge.", "warning");
                      this.$Progress.fail();
                  });
                }
              })
          },
          editBranchModal(branch){
            this.editbranchmode = true;
            this.branches.reset();
            $('#addNewBranch').modal('show');
            this.branches.fill(branch);
          },
          newBranchModal(){
            this.editbranchmode = false;
            this.branches.reset();
            $('#addNewBranch').modal('show');
          },

          loadBranches(){
            axios.get("api/branches").then(({ data }) => {
                this.branch = data;
              });
          },
          //add branch
          addNewBranch(){
            this.$Progress.start();
            
            this.branches.post('api/branch')
              .then(response => {
                this.$Progress.finish();
                $('#addNewBranch').modal('hide');                
                toast({
                  type: 'success',
                  title: 'Branch Created in successfully'
                });
                this.$eventHub.emit('BranchCreated');
              })
              .catch(error => {
                this.$Progress.fail();
              })
          },
          //branch code end
        },
        created() {
          this.getLoggedinUserInfo();
          this.loadDesignations();
          this.loadBranches();
          this.loadPartners();
          this.$eventHub.on('BranchCreated', () => {
            this.loadBranches();
            this.loadPartners();
          });
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
