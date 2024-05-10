<?php
    //$con_online=mysqli_connect("localhost","root","","db_hris");
    $con_online=mysqli_connect("cenpripower.com","admin_hris","1t@dm1N_cenpri","db_humanresource");
    $con_local=mysqli_connect("localhost","root","","db_hris");
    //ONLINE
    $mysqli_online=mysqli_query($con_online,"SELECT * FROM personal_data");
    $count_rows_online=mysqli_num_rows($mysqli_online);
    $mysqli_online2=mysqli_query($con_online,"SELECT * FROM additional_info");
    $count_rows_online2=mysqli_num_rows($mysqli_online2);
    $mysqli_online3=mysqli_query($con_online,"SELECT * FROM allowance");
    $count_rows_online3=mysqli_num_rows($mysqli_online3);
    $mysqli_online4=mysqli_query($con_online,"SELECT * FROM amendment");
    $count_rows_online4=mysqli_num_rows($mysqli_online4);
    $mysqli_online5=mysqli_query($con_online,"SELECT * FROM amendment_details");
    $count_rows_online5=mysqli_num_rows($mysqli_online5);
    $mysqli_online6=mysqli_query($con_online,"SELECT * FROM business_unit");
    $count_rows_online6=mysqli_num_rows($mysqli_online6);
    $mysqli_online7=mysqli_query($con_online,"SELECT * FROM certificate");
    $count_rows_online7=mysqli_num_rows($mysqli_online7);
    $mysqli_online8=mysqli_query($con_online,"SELECT * FROM character_reference");
    $count_rows_online8=mysqli_num_rows($mysqli_online8);
    $mysqli_online9=mysqli_query($con_online,"SELECT * FROM children");
    $count_rows_online9=mysqli_num_rows($mysqli_online9);
    $mysqli_online11=mysqli_query($con_online,"SELECT * FROM daily_monitoring");
    $count_rows_online11=mysqli_num_rows($mysqli_online11);
    $mysqli_online12=mysqli_query($con_online,"SELECT * FROM department");
    $count_rows_online12=mysqli_num_rows($mysqli_online12);
    $mysqli_online13=mysqli_query($con_online,"SELECT * FROM disciplinary_action");
    $count_rows_online13=mysqli_num_rows($mysqli_online13);
    $mysqli_online14=mysqli_query($con_online,"SELECT * FROM educational_background");
    $count_rows_online14=mysqli_num_rows($mysqli_online14);
    $mysqli_online15=mysqli_query($con_online,"SELECT * FROM employment_history");
    $count_rows_online15=mysqli_num_rows($mysqli_online15);
    $mysqli_online16=mysqli_query($con_online,"SELECT * FROM evaluation");
    $count_rows_online16=mysqli_num_rows($mysqli_online16);
    $mysqli_online17=mysqli_query($con_online,"SELECT * FROM evaluation_history");
    $count_rows_online17=mysqli_num_rows($mysqli_online17);
    $mysqli_online18=mysqli_query($con_online,"SELECT * FROM family_background");
    $count_rows_online18=mysqli_num_rows($mysqli_online18);
    $mysqli_online19=mysqli_query($con_online,"SELECT * FROM hospital_contact");
    $count_rows_online19=mysqli_num_rows($mysqli_online19);
    $mysqli_online20=mysqli_query($con_online,"SELECT * FROM hospital_exposure");
    $count_rows_online20=mysqli_num_rows($mysqli_online20);
    $mysqli_online21=mysqli_query($con_online,"SELECT * FROM job_history");
    $count_rows_online21=mysqli_num_rows($mysqli_online21);
    $mysqli_online22=mysqli_query($con_online,"SELECT * FROM location");
    $count_rows_online22=mysqli_num_rows($mysqli_online22);
    $mysqli_online23=mysqli_query($con_online,"SELECT * FROM other_files");
    $count_rows_online23=mysqli_num_rows($mysqli_online23);
    $mysqli_online24=mysqli_query($con_online,"SELECT * FROM person_to_contact");
    $count_rows_online24=mysqli_num_rows($mysqli_online24);
    $mysqli_online25=mysqli_query($con_online,"SELECT * FROM position");
    $count_rows_online25=mysqli_num_rows($mysqli_online25);
    $mysqli_online27=mysqli_query($con_online,"SELECT * FROM reminders");
    $count_rows_online27=mysqli_num_rows($mysqli_online27);
    $mysqli_online28=mysqli_query($con_online,"SELECT * FROM reminders_new");
    $count_rows_online28=mysqli_num_rows($mysqli_online28);
    $mysqli_online29=mysqli_query($con_online,"SELECT * FROM siblings");
    $count_rows_online29=mysqli_num_rows($mysqli_online29);
    $mysqli_online30=mysqli_query($con_online,"SELECT * FROM tbl_department");
    $count_rows_online30=mysqli_num_rows($mysqli_online30);
    $mysqli_online31=mysqli_query($con_online,"SELECT * FROM tbl_users");
    $count_rows_online31=mysqli_num_rows($mysqli_online31);
    $mysqli_online32=mysqli_query($con_online,"SELECT * FROM tbl_usertype");
    $count_rows_online32=mysqli_num_rows($mysqli_online32);
    $mysqli_online33=mysqli_query($con_online,"SELECT * FROM timekeeping_resolve");
    $count_rows_online33=mysqli_num_rows($mysqli_online33);
    $mysqli_online34=mysqli_query($con_online,"SELECT * FROM timekeeping_testing");
    $count_rows_online34=mysqli_num_rows($mysqli_online34);
    $mysqli_online35=mysqli_query($con_online,"SELECT * FROM tmp_table");
    $count_rows_online35=mysqli_num_rows($mysqli_online35);
    $mysqli_online36=mysqli_query($con_online,"SELECT * FROM training_seminars");
    $count_rows_online36=mysqli_num_rows($mysqli_online36);
    $mysqli_online37=mysqli_query($con_online,"SELECT * FROM travel_history");
    $count_rows_online37=mysqli_num_rows($mysqli_online37);
    $mysqli_online38=mysqli_query($con_online,"SELECT * FROM travel_history_details");
    $count_rows_online38=mysqli_num_rows($mysqli_online38);
    $mysqli_online39=mysqli_query($con_online,"SELECT * FROM travel_history_places");
    $count_rows_online39=mysqli_num_rows($mysqli_online39);
    $mysqli_online40=mysqli_query($con_online,"SELECT * FROM user");
    $count_rows_online40=mysqli_num_rows($mysqli_online40);
    $mysqli_online41=mysqli_query($con_online,"SELECT * FROM visitor_history");
    $count_rows_online41=mysqli_num_rows($mysqli_online41);

    //LOCAL
    $mysqli_local=mysqli_query($con_local,"SELECT * FROM personal_data");
    $count_rows_local=mysqli_num_rows($mysqli_local);
    $mysqli_local2=mysqli_query($con_local,"SELECT * FROM additional_info");
    $count_rows_local2=mysqli_num_rows($mysqli_local2);
    $mysqli_local3=mysqli_query($con_local,"SELECT * FROM allowance");
    $count_rows_local3=mysqli_num_rows($mysqli_local3);
    $mysqli_local4=mysqli_query($con_local,"SELECT * FROM amendment");
    $count_rows_local4=mysqli_num_rows($mysqli_local4);
    $mysqli_local5=mysqli_query($con_local,"SELECT * FROM amendment_details");
    $count_rows_local5=mysqli_num_rows($mysqli_local5);
    $mysqli_local6=mysqli_query($con_local,"SELECT * FROM business_unit");
    $count_rows_local6=mysqli_num_rows($mysqli_local6);
    $mysqli_local7=mysqli_query($con_local,"SELECT * FROM certificate");
    $count_rows_local7=mysqli_num_rows($mysqli_local7);
    $mysqli_local8=mysqli_query($con_local,"SELECT * FROM character_reference");
    $count_rows_local8=mysqli_num_rows($mysqli_local8);
    $mysqli_local9=mysqli_query($con_local,"SELECT * FROM children");
    $count_rows_local9=mysqli_num_rows($mysqli_local9);
    $mysqli_local11=mysqli_query($con_local,"SELECT * FROM daily_monitoring");
    $count_rows_local11=mysqli_num_rows($mysqli_local11);
    $mysqli_local12=mysqli_query($con_local,"SELECT * FROM department");
    $count_rows_local12=mysqli_num_rows($mysqli_local12);
    $mysqli_local13=mysqli_query($con_local,"SELECT * FROM disciplinary_action");
    $count_rows_local13=mysqli_num_rows($mysqli_local13);
    $mysqli_local14=mysqli_query($con_local,"SELECT * FROM educational_background");
    $count_rows_local14=mysqli_num_rows($mysqli_local14);
    $mysqli_local15=mysqli_query($con_local,"SELECT * FROM employment_history");
    $count_rows_local15=mysqli_num_rows($mysqli_local15);
    $mysqli_local16=mysqli_query($con_local,"SELECT * FROM evaluation");
    $count_rows_local16=mysqli_num_rows($mysqli_local16);
    $mysqli_local17=mysqli_query($con_local,"SELECT * FROM evaluation_history");
    $count_rows_local17=mysqli_num_rows($mysqli_local17);
    $mysqli_local18=mysqli_query($con_local,"SELECT * FROM family_background");
    $count_rows_local18=mysqli_num_rows($mysqli_local18);
    $mysqli_local19=mysqli_query($con_local,"SELECT * FROM hospital_contact");
    $count_rows_local19=mysqli_num_rows($mysqli_local19);
    $mysqli_local20=mysqli_query($con_local,"SELECT * FROM hospital_exposure");
    $count_rows_local20=mysqli_num_rows($mysqli_local20);
    $mysqli_local21=mysqli_query($con_local,"SELECT * FROM job_history");
    $count_rows_local21=mysqli_num_rows($mysqli_local21);
    $mysqli_local22=mysqli_query($con_local,"SELECT * FROM location");
    $count_rows_local22=mysqli_num_rows($mysqli_local22);
    $mysqli_local23=mysqli_query($con_local,"SELECT * FROM other_files");
    $count_rows_local23=mysqli_num_rows($mysqli_local23);
    $mysqli_local24=mysqli_query($con_local,"SELECT * FROM person_to_contact");
    $count_rows_local24=mysqli_num_rows($mysqli_local24);
    $mysqli_local25=mysqli_query($con_local,"SELECT * FROM position");
    $count_rows_local25=mysqli_num_rows($mysqli_local25);
    $mysqli_local27=mysqli_query($con_local,"SELECT * FROM reminders");
    $count_rows_local27=mysqli_num_rows($mysqli_local27);
    $mysqli_local28=mysqli_query($con_local,"SELECT * FROM reminders_new");
    $count_rows_local28=mysqli_num_rows($mysqli_local28);
    $mysqli_local29=mysqli_query($con_local,"SELECT * FROM siblings");
    $count_rows_local29=mysqli_num_rows($mysqli_local29);
    $mysqli_local30=mysqli_query($con_local,"SELECT * FROM tbl_department");
    $count_rows_local30=mysqli_num_rows($mysqli_local30);
    $mysqli_local31=mysqli_query($con_local,"SELECT * FROM tbl_users");
    $count_rows_local31=mysqli_num_rows($mysqli_local31);
    $mysqli_local32=mysqli_query($con_local,"SELECT * FROM tbl_usertype");
    $count_rows_local32=mysqli_num_rows($mysqli_local32);
    $mysqli_local33=mysqli_query($con_local,"SELECT * FROM timekeeping_resolve");
    $count_rows_local33=mysqli_num_rows($mysqli_local33);
    $mysqli_local34=mysqli_query($con_local,"SELECT * FROM timekeeping_testing");
    $count_rows_local34=mysqli_num_rows($mysqli_local34);
    $mysqli_local35=mysqli_query($con_local,"SELECT * FROM tmp_table");
    $count_rows_local35=mysqli_num_rows($mysqli_local35);
    $mysqli_local36=mysqli_query($con_local,"SELECT * FROM training_seminars");
    $count_rows_local36=mysqli_num_rows($mysqli_local36);
    $mysqli_local37=mysqli_query($con_local,"SELECT * FROM travel_history");
    $count_rows_local37=mysqli_num_rows($mysqli_local37);
    $mysqli_local38=mysqli_query($con_local,"SELECT * FROM travel_history_details");
    $count_rows_local38=mysqli_num_rows($mysqli_local38);
    $mysqli_local39=mysqli_query($con_local,"SELECT * FROM travel_history_places");
    $count_rows_local39=mysqli_num_rows($mysqli_local39);
    $mysqli_local40=mysqli_query($con_local,"SELECT * FROM user");
    $count_rows_local40=mysqli_num_rows($mysqli_local40);
    $mysqli_local41=mysqli_query($con_local,"SELECT * FROM visitor_history");
    $count_rows_local41=mysqli_num_rows($mysqli_local41);

    if($count_rows_online!=$count_rows_local){
        while($row_online=mysqli_fetch_array($mysqli_online)){
            $con_local->query("INSERT INTO personal_data (personal_id, date_encoded,lname,fname,mname,name_ext,age,sex,civil_status,permanent_address,provincial_address,pre_city,pre_prov,perm_city,perm_prov,bdate,place_birth,contact_no,nationality,religion,map_file,resume_file,email,status,essay_file,photo_upload,bio_num,date_hired,emp_num,emp_status,current_dept,current_bu,current_location,current_supervisor,supervisor,date_separated,remarks,done,retrieve,applied_company) VALUES ('$row_online[personal_id]','$row_online[date_encoded]','$row_online[lname]','$row_online[fname]','$row_online[mname]','$row_online[name_ext]','$row_online[age]','$row_online[sex]','$row_online[civil_status]','$row_online[permanent_address]','$row_online[provincial_address]','$row_online[pre_city]','$row_online[pre_prov]','$row_online[perm_city]','$row_online[perm_prov]','$row_online[bdate]','$row_online[place_birth]','$row_online[contact_no]','$row_online[nationality]','$row_online[religion]','$row_online[map_file]','$row_online[resume_file]','$row_online[email]','$row_online[status]','$row_online[essay_file]','$row_online[photo_upload]','$row_online[bio_num]','$row_online[date_hired]','$row_online[emp_num]','$row_online[emp_status]','$row_online[current_dept]','$row_online[current_bu]','$row_online[current_location]','$row_online[current_supervisor]','$row_online[supervisor]','$row_online[date_separated]','$row_online[remarks]','$row_online[done]','$row_online[retrieve]','$row_online[applied_company]')");
        }
    }

    if($count_rows_online2!=$count_rows_local2){
        while($row_online2=mysqli_fetch_array($mysqli_online2)){
            $height_esc = mysqli_real_escape_string($con_online,$row_online2['height']);
	        $weight_esc = mysqli_real_escape_string($con_online,$row_online2['weight']);
            $con_local->query("INSERT INTO additional_info (`additonal_id`, `personal_id`, `tin`, `sss`, `philhealth`, `pagibig`, `height`, `weight`, `dialect`, `drivers_license`, `date_issued_licensed_number`, `special_skills`, `illness`, `own_bus`, `nature_bus`, `profession`, `license_no`) VALUES ('$row_online2[additonal_id]', '$row_online2[personal_id]', '$row_online2[tin]', '$row_online2[sss]', '$row_online2[philhealth]', '$row_online2[pagibig]', '$height_esc', '$weight_esc', '$row_online2[dialect]', '$row_online2[drivers_license]', '$row_online2[date_issued_licensed_number]', '$row_online2[special_skills]', '$row_online2[illness]', '$row_online2[own_bus]', '$row_online2[nature_bus]', '$row_online2[profession]', '$row_online2[license_no]')");
        }
    }

    if($count_rows_online3!=$count_rows_local3){
        while($row_online3=mysqli_fetch_array($mysqli_online3)){
            $con_local->query("INSERT INTO allowance (`allowance_id`, `personal_id`, `amount`, `description`) VALUES ('$row_online3[allowance_id]', '$row_online3[personal_id]', '$row_online3[amount]', '$row_online3[description]')");
        }
    }

    if($count_rows_online4!=$count_rows_local4){
        while($row_online4=mysqli_fetch_array($mysqli_online4)){
            $con_local->query("INSERT INTO amendment (`amendment_id`, `personal_id`, `date_prepared`, `date_effectivity`, `change_reason`, `remarks`, `dept_head`, `general_manager`, `executive_director`, `saved`, `draft`, `draft_date`, `save_date`, `saved_by`) VALUES ('$row_online4[amendment_id]', '$row_online4[personal_id]', '$row_online4[date_prepared]', '$row_online4[date_effectivity]', '$row_online4[change_reason]', '$row_online4[remarks]', '$row_online4[dept_head]', '$row_online4[general_manager]', '$row_online4[executive_director]', '$row_online4[saved]', '$row_online4[draft]', '$row_online4[draft_date]', '$row_online4[save_date]', '$row_online4[saved_by]')");
        }
    }

    if($count_rows_online5!=$count_rows_local5){
        while($row_online5=mysqli_fetch_array($mysqli_online5)){
            $con_local->query("INSERT INTO `db_hris_test`.`amendment_details` (`amend_det_id`, `amendment_id`, `change_name`, `change_from`, `change_to`) VALUES ('$row_online5[amend_det_id]', '$row_online5[amendment_id]', '$row_online5[change_name]', '$row_online5[change_from]', '$row_online5[change_to]')");
        }
    }

    if($count_rows_online6!=$count_rows_local6){
        while($row_online6=mysqli_fetch_array($mysqli_online6)){
            $con_local->query("INSERT INTO business_unit (`bu_id`, `bu_name`) VALUES ('$row_online6[bu_id]', '$row_online6[bu_name]')");
        }
    }

    if($count_rows_online7!=$count_rows_local7){
        while($row_online7=mysqli_fetch_array($mysqli_online7)){
            $con_local->query("INSERT INTO certificate (`file_id`, `personal_id`, `cert_file`, `cert_name`) VALUES ('$row_online7[file_id]', '$row_online7[personal_id]', '$row_online7[cert_file]', '$row_online7[cert_name]')");
        }
    }

    if($count_rows_online8!=$count_rows_local8){
        while($row_online8=mysqli_fetch_array($mysqli_online8)){
            $con_local->query("INSERT INTO character_reference (`character_id`, `personal_id`, `c_name`, `c_employer`, `c_position`, `c_relationship`, `c_contact_no`) VALUES ('$row_online8[character_id]', '$row_online8[personal_id]', '$row_online8[c_name]', '$row_online8[c_employer]', '$row_online8[c_position]', '$row_online8[c_relationship]', '$row_online8[c_contact_no]')");
        }
    }

    if($count_rows_online9!=$count_rows_local9){
        while($row_online9=mysqli_fetch_array($mysqli_online9)){
            $con_local->query("INSERT INTO children (`children_id`, `personal_id`, `child_name`, `child_bday`) VALUES ('$row_online9[children_id]', '$row_online9[personal_id]', '$row_online9[child_name]', '$row_online9[child_bday]')");
        }
    }

    if($count_rows_online11!=$count_rows_local11){
        while($row_online11=mysqli_fetch_array($mysqli_online11)){
            $con_local->query("INSERT INTO daily_monitoring (`daily_id`, `personal_id`, `date_encoded`, `time_encoded`, `temperature`, `cough`, `sore_throat`, `body_pain`, `headache`, `rhinorrhea`, `remarks`) VALUES ('$row_online11[daily_id]', '$row_online11[personal_id]', '$row_online11[date_encoded]', '$row_online11[time_encoded]', '$row_online11[temperature]', '$row_online11[cough]', '$row_online11[sore_throat]', '$row_online11[body_pain]', '$row_online11[headache]', '$row_online11[rhinorrhea]', '$row_online11[remarks]')");
        }
    }

    if($count_rows_online12!=$count_rows_local12){
        while($row_online12=mysqli_fetch_array($mysqli_online12)){
            $con_local->query("INSERT INTO department (`dept_id`, `dept_name`, `sheet_name`) VALUES ('$row_online12[dept_id]', '$row_online12[dept_name]', '$row_online12[sheet_name]')");
        }
    }

    if($count_rows_online13!=$count_rows_local13){
        while($row_online13=mysqli_fetch_array($mysqli_online13)){
            $con_local->query("INSERT INTO disciplinary_action (`discipline_id`, `personal_id`, `offense_date`, `offense_type`, `offense_no`, `offense_desc`, `disp_action`) VALUES ('$row_online13[discipline_id]', '$row_online13[personal_id]', '$row_online13[offense_date]', '$row_online13[offense_type]', '$row_online13[offense_no]', '$row_online13[offense_desc]', '$row_online13[disp_action]')");
        }
    }

    if($count_rows_online14!=$count_rows_local14){
        while($row_online14=mysqli_fetch_array($mysqli_online14)){
            $con_local->query("INSERT INTO educational_background (`educational_id`, `personal_id`, `college`, `course`, `ed_from`, `ed_to`, `date_graduated`, `highschool`, `h_course`, `h_from`, `h_to`, `h_date_graduated`, `elementary`, `e_course`, `e_from`, `e_to`, `e_date_graduated`, `post_grad`, `p_course`, `p_from`, `p_to`, `p_date_graduated`) VALUES ('$row_online14[educational_id]', '$row_online14[personal_id]', '$row_online14[college]', '$row_online14[course]', '$row_online14[ed_from]', '$row_online14[ed_to]', '$row_online14[date_graduated]', '$row_online14[highschool]', '$row_online14[h_course]', '$row_online14[h_from]', '$row_online14[h_to]', '$row_online14[h_date_graduated]', '$row_online14[elementary]', '$row_online14[e_course]', '$row_online14[e_from]', '$row_online14[e_to]', '$row_online14[e_date_graduated]', '$row_online14[post_grad]', '$row_online14[p_course]', '$row_online14[p_from]', '$row_online14[p_to]', '$row_online14[p_date_graduated]')");
        }
    }

    if($count_rows_online15!=$count_rows_local15){
        while($row_online15=mysqli_fetch_array($mysqli_online15)){
            $con_local->query("INSERT INTO employment_history (`employment_id`, `personal_id`, `name_address_employer`, `em_position`, `em_from`, `em_to`, `em_remarks`) VALUES ('$row_online15[employment_id]', '$row_online15[personal_id]', '$row_online15[name_address_employer]', '$row_online15[em_position]', '$row_online15[em_from]', '$row_online15[em_to]', '$row_online15[em_remarks]')");
        }
    }

    if($count_rows_online16!=$count_rows_local16){
        while($row_online16=mysqli_fetch_array($mysqli_online16)){
            $con_local->query("INSERT INTO evaluation (`eval_id`, `personal_id`, `eval_file`, `eval_period`) VALUES ('$row_online16[eval_id]', '$row_online16[personal_id]', '$row_online16[eval_file]', '$row_online16[eval_period]')");
        }
    }

    if($count_rows_online17!=$count_rows_local17){
        while($row_online17=mysqli_fetch_array($mysqli_online17)){
            $con_local->query("INSERT INTO evaluation_history (`evalhist_id`, `personal_id`, `eval_date`, `score`, `eval_type`, `adjustment`, `per_day`, `effective_date`) VALUES ('$row_online17[evalhist_id]', '$row_online17[personal_id]', '$row_online17[eval_date]', '$row_online17[score]', '$row_online17[eval_type]', '$row_online17[adjustment]', '$row_online17[per_day]', '$row_online17[effective_date]')");
        }
    }

    if($count_rows_online18!=$count_rows_local18){
        while($row_online18=mysqli_fetch_array($mysqli_online18)){
            $con_local->query("INSERT INTO family_background (`family_id`, `personal_id`, `father_name`, `fa_age`, `fa_bday`, `m_bday`, `n_bday`, `occupation`, `mother_name`, `m_age`, `m_occupation`, `name_spouse`, `n_age`, `n_occupation`, `employers_name_address`) VALUES ('$row_online18[family_id]', '$row_online18[personal_id]', '$row_online18[father_name]', '$row_online18[fa_age]', '$row_online18[fa_bday]', '$row_online18[fa_bday]', '$row_online18[m_bday]', '$row_online18[n_bday]', '$row_online18[occupation]', '$row_online18[mother_name]', '$row_online18[m_age]', '$row_online18[m_occupation]', '$row_online18[name_spouse]', '$row_online18[n_occupation]', '$row_online18[employers_name_address]')");
        }
    }

    if($count_rows_online19!=$count_rows_local19){
        while($row_online19=mysqli_fetch_array($mysqli_online19)){
            $con_local->query("INSERT INTO hospital_contact (`contact_id`, `exposure_id`, `close_contact`) VALUES ('$row_online19[contact_id]', '$row_online19[exposure_id]', '$row_online19[close_contact]')");
        }
    }

    if($count_rows_online20!=$count_rows_local20){
        while($row_online20=mysqli_fetch_array($mysqli_online20)){
            $con_local->query("INSERT INTO hospital_exposure (`exposure_id`, `personal_id`, `date_encoded`, `hospital_exposure`, `hospital_name`, `visit_purpose`, `initial_visit`, `last_visit`, `measures_observed`, `facemask`, `hand_washing`, `respiratory_triage`, `social_distancing`, `others`, `others_specify`, `specific_area`, `close_contact`, `measures_decontamination`, `hc_provider`, `hc_workplace`, `hc_job`, `hc_assignment`, `hc_relationship`, `hc_measures`, `hc_specific_measures`, `measures_at_home`, `hh_illness`, `hh_illness_specific`, `hh_illness_date`, `hh_illness_duration`, `seek_med_attention`, `seek_facility`, `treatment_advice`, `home_management`, `authorize`) VALUES ('$row_online20[exposure_id]', '$row_online20[personal_id]', '$row_online20[date_encoded]', '$row_online20[hospital_exposure]', '$row_online20[hospital_name]', '$row_online20[visit_purpose]', '$row_online20[initial_visit]', '$row_online20[last_visit]', '$row_online20[measures_observed]', '$row_online20[facemask]', '$row_online20[hand_washing]', '$row_online20[respiratory_triage]', '$row_online20[social_distancing]', '$row_online20[others]', '$row_online20[others_specify]', '$row_online20[specific_area]', '$row_online20[close_contact]', '$row_online20[measures_decontamination]', '$row_online20[hc_provider]', '$row_online20[hc_workplace]', '$row_online20[hc_job]', '$row_online20[hc_assignment]', '$row_online20[hc_relationship]', '$row_online20[hc_measures]', '$row_online20[hc_specific_measures]', '$row_online20[measures_at_home]', '$row_online20[hh_illness]', '$row_online20[hh_illness_specific]', '$row_online20[hh_illness_date]', '$row_online20[hh_illness_duration]', '$row_online20[seek_med_attention]', '$row_online20[seek_facility]', '$row_online20[treatment_advice]', '$row_online20[home_management]', '$row_online20[authorize]')");
        }
    }
    
    if($count_rows_online21!=$count_rows_local21){
        while($row_online21=mysqli_fetch_array($mysqli_online21)){
            $con_local->query("INSERT INTO job_history (`history_id`, `personal_id`, `effective_date`, `emp_status`, `j_position`, `department_id`, `bu_id`, `location_id`, `salary`, `per_day`, `supervisor`, `end_date`) VALUES ('$row_online21[history_id]', '$row_online21[personal_id]', '$row_online21[effective_date]', '$row_online21[emp_status]', '$row_online21[j_position]', '$row_online21[department_id]', '$row_online21[bu_id]', '$row_online21[location_id]', '$row_online21[salary]', '$row_online21[per_day]', '$row_online21[supervisor]', '$row_online21[end_date]')");
        }
    }

    if($count_rows_online22!=$count_rows_local22){
        while($row_online22=mysqli_fetch_array($mysqli_online22)){
            $con_local->query("INSERT INTO location (`location_id`, `location_name`) VALUES ('$row_online22[location_id]', '$row_online22[location_name]')");
        }
    }

    if($count_rows_online23!=$count_rows_local23){
        while($row_online23=mysqli_fetch_array($mysqli_online23)){
            $con_local->query("INSERT INTO other_files (`other_id`, `personal_id`, `other_file`, `other_name`) VALUES ('$row_online23[other_id]', '$row_online23[personal_id]', '$row_online23[other_file]', '$row_online23[other_name]')");
        }
    }

    if($count_rows_online24!=$count_rows_local24){
        while($row_online24=mysqli_fetch_array($mysqli_online24)){
            $con_local->query("INSERT INTO person_to_contact (`person_id`, `personal_id`, `p_name`, `p_relationship`, `p_contact_no`, `address`) VALUES ('$row_online24[person_id]', '$row_online24[personal_id]', '$row_online24[p_name]', '$row_online24[p_relationship]', '$row_online24[p_contact_no]', '$row_online24[address]')");
        }
    }

    if($count_rows_online25!=$count_rows_local25){
        while($row_online25=mysqli_fetch_array($mysqli_online25)){
            $con_local->query("INSERT INTO position (`p_id`, `personal_id`, `position_applied`, `expected_salary`, `sal_from`, `sal_to`, `date_applied`, `date_available`) VALUES ('$row_online25[p_id]', '$row_online25[personal_id]', '$row_online25[position_applied]', '$row_online25[expected_salary]', '$row_online25[sal_from]', '$row_online25[sal_to]', '$row_online25[date_applied]', '$row_online25[date_available]')");
        }
    }

    if($count_rows_online27!=$count_rows_local27){
        while($row_online27=mysqli_fetch_array($mysqli_online27)){
            $con_local->query("INSERT INTO reminders (`reminder_id`, `reminder_date`, `notes`, `created_by`, `date_created`, `done`, `personal_id`) VALUES ('$row_online27[reminder_id]', '$row_online27[reminder_date]', '$row_online27[notes]', '$row_online27[created_by]', '$row_online27[date_created]', '$row_online27[done]', '$row_online27[personal_id]')");
        }
    }

    if($count_rows_online28!=$count_rows_local28){
        while($row_online28=mysqli_fetch_array($mysqli_online28)){
            $con_local->query("INSERT INTO reminders_new (`todo_id`, `todo_date`, `notes`, `created_by`, `date_created`, `cancel_reason`, `cancel`) VALUES ('$row_online28[todo_id]', '$row_online28[todo_date]', '$row_online28[notes]', '$row_online28[created_by]', '$row_online28[date_created]', '$row_online28[cancel_reason]', '$row_online28[cancel]')");
        }
    }

    if($count_rows_online29!=$count_rows_local29){
        while($row_online29=mysqli_fetch_array($mysqli_online29)){
            $con_local->query("INSERT INTO siblings (`siblings_id`, `personal_id`, `siblings_name`, `siblings_age`, `siblings_bday`, `siblings_occupation`, `emp_na_add`) VALUES ('$row_online29[siblings_id]', '$row_online29[personal_id]', '$row_online29[siblings_name]', '$row_online29[siblings_age]', '$row_online29[siblings_bday]', '$row_online29[siblings_occupation]', '$row_online29[emp_na_add]')");
        }
    }

    if($count_rows_online30!=$count_rows_local30){
        while($row_online30=mysqli_fetch_array($mysqli_online30)){
            $con_local->query("INSERT INTO tbl_department (`department_id`, `department_name`) VALUES ('$row_online30[department_id]', '$row_online30[department_name]')");
        }
    }
    
    if($count_rows_online31!=$count_rows_local31){
        while($row_online31=mysqli_fetch_array($mysqli_online31)){
            $con_local->query("INSERT INTO tbl_users (`user_id`, `usertype_id`, `department_id`, `username`, `password`, `fullname`) VALUES ('$row_online31[user_id]', '$row_online31[usertype_id]', '$row_online31[department_id]', '$row_online31[username]', '$row_online31[password]', '$row_online31[fullname]')");
        }
    }

    if($count_rows_online32!=$count_rows_local32){
        while($row_online32=mysqli_fetch_array($mysqli_online32)){
            $con_local->query("INSERT INTO tbl_usertype (`usertype_id`, `usertype_name`) VALUES ('$row_online32[usertype_id]', '$row_online32[usertype_name]')");
        }
    }

    if($count_rows_online33!=$count_rows_local33){
        while($row_online33=mysqli_fetch_array($mysqli_online33)){
            $con_local->query("INSERT INTO timekeeping_resolve (`resolve_id`, `timekeeping_date`, `personal_id`, `remarks`) VALUES ('$row_online33[resolve_id]', '$row_online33[timekeeping_date]', '$row_online33[personal_id]', '$row_online33[remarks]')");
        }
    }

    if($count_rows_online35!=$count_rows_local35){
        while($row_online35=mysqli_fetch_array($mysqli_online35)){
            $con_local->query("INSERT INTO tmp_table (`tmp_id`, `personal_id`, `status`, `emp_status`, `email`, `emp_num`, `date_hired`, `bio_num`, `date_separated`) VALUES ('$row_online35[tmp_id]', '$row_online35[personal_id]', '$row_online35[status]', '$row_online35[emp_status]', '$row_online35[email]', '$row_online35[emp_num]', '$row_online35[date_hired]', '$row_online35[bio_num]', '$row_online35[date_separated]')");
        }
    }

    if($count_rows_online36!=$count_rows_local36){
        while($row_online36=mysqli_fetch_array($mysqli_online36)){
            $con_local->query("INSERT INTO training_seminars (`training_seminars_id`, `personal_id`, `title`, `venue`, `organizer`, `training_date`) VALUES ('$row_online36[training_seminars_id]', '$row_online36[personal_id]', '$row_online36[title]', '$row_online36[venue]', '$row_online36[organizer]', '$row_online36[training_date]')");
        }
    }

    if($count_rows_online37!=$count_rows_local37){
        while($row_online37=mysqli_fetch_array($mysqli_online37)){
            $con_local->query("INSERT INTO travel_history (`travel_id`, `personal_id`, `date_encoded`, `travel_purpose`, `departure_date`, `return_date`, `destination`, `transportation_mode`) VALUES ('$row_online37[travel_id]', '$row_online37[personal_id]', '$row_online37[date_encoded]', '$row_online37[travel_purpose]', '$row_online37[departure_date]', '$row_online37[return_date]', '$row_online37[destination]', '$row_online37[transportation_mode]')");
        }
    }

    if($count_rows_online38!=$count_rows_local38){
        while($row_online38=mysqli_fetch_array($mysqli_online38)){
            $con_local->query("INSERT INTO travel_history_details (`traveLdetails_id`, `travel_id`, `person_name`, `person_sick`, `medical_condition`) VALUES ('$row_online38[traveLdetails_id]', '$row_online38[travel_id]', '$row_online38[person_name]', '$row_online38[person_sick]', '$row_online38[medical_condition]')");
        }
    }

    if($count_rows_online39!=$count_rows_local39){
        while($row_online39=mysqli_fetch_array($mysqli_online39)){
            $con_local->query("INSERT INTO travel_history_places (`visit_id`, `travel_id`, `other_places`, `departure_date`, `return_date`, `transportation_mode`) VALUES ('$row_online39[visit_id]', '$row_online39[travel_id]', '$row_online39[other_places]', '$row_online39[departure_date]', '$row_online39[return_date]', '$row_online39[transportation_mode]')");
        }
    }

    if($count_rows_online40!=$count_rows_local40){
        while($row_online40=mysqli_fetch_array($mysqli_online40)){
            $con_local->query("INSERT INTO user (`user_id`, `username`, `password`, `fullname`) VALUES ('$row_online40[user_id]', '$row_online40[username]', '$row_online40[password]', '$row_online40[fullname]')");
        }
    }

    if($count_rows_online41!=$count_rows_local41){
        while($row_online41=mysqli_fetch_array($mysqli_online41)){
            $con_local->query("INSERT INTO visitor_history (`visitor_id`, `fullname`, `date_encode`, `temperature`, `contact_number`, `residence`, `schedule_visit_date`, `schedule_visit_hour`, `nature_visit`, `company_name`, `company_address`, `sore_throat`, `body_pain`, `headache`, `fever`, `runny_nose`, `cough`, `visited_covid`, `contact_flulike`, `specify`, `travelled_outside`, `close_environment`, `agreement_signature`, `timestamp`) VALUES ('$row_online41[visitor_id]', '$row_online41[fullname]', '$row_online41[date_encode]', '$row_online41[temperature]', '$row_online41[contact_number]', '$row_online41[residence]', '$row_online41[schedule_visit_date]', '$row_online41[schedule_visit_hour]', '$row_online41[nature_visit]', '$row_online41[company_name]', '$row_online41[company_address]', '$row_online41[sore_throat]', '$row_online41[body_pain]', '$row_online41[headache]', '$row_online41[fever]', '$row_online41[runny_nose]', '$row_online41[cough]', '$row_online41[visited_covid]', '$row_online41[contact_flulike]', '$row_online41[specify]', '$row_online41[travelled_outside]', '$row_online41[close_environment]', '$row_online41[agreement_signature]', '$row_online41[timestamp]')");
        }
    }
?>