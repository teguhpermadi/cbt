<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtpengawas extends CI_Controller { public function __construct() { goto iZgvs; zN6Pn: $this->load->model("\104\141\x73\150\142\x6f\141\x72\144\x5f\x6d\157\144\145\x6c", "\144\x61\x73\x68\142\157\141\162\144"); goto pFqlb; UOwQV: redirect("\141\165\x74\150"); goto vh87K; mc95Z: NuTuC: goto WfIij; cj2TK: $this->load->model("\115\141\163\164\x65\x72\137\x6d\157\x64\x65\x6c", "\155\141\163\164\145\x72"); goto zN6Pn; vh87K: i_SqM: goto rQRsd; Z3A0X: show_error("\110\141\156\171\141\x20\101\x64\x6d\151\156\151\x73\x74\162\x61\164\x6f\162\x20\x79\x61\x6e\x67\x20\144\151\x62\x65\x72\x69\x20\x68\x61\x6b\40\x75\156\x74\165\x6b\x20\155\x65\156\x67\x61\153\x73\x65\163\x20\x68\141\154\141\155\x61\156\x20\x69\156\x69\54\40\x3c\141\40\x68\x72\x65\146\75\42" . base_url("\144\x61\x73\x68\142\157\x61\162\x64") . "\42\x3e\x4b\145\155\x62\141\x6c\x69\40\x6b\145\x20\155\145\156\165\40\x61\167\141\x6c\x3c\57\x61\x3e", 403, "\101\153\x73\x65\163\x20\x54\145\162\154\x61\x72\141\156\x67"); goto mc95Z; iZgvs: parent::__construct(); goto HDvbz; WfIij: goto i_SqM; goto M1zkc; rQRsd: $this->load->library(["\144\x61\x74\x61\164\141\142\x6c\x65\163", "\x66\157\162\x6d\137\166\141\154\x69\x64\141\x74\151\157\x6e"]); goto cj2TK; M1zkc: iiLy9: goto UOwQV; OxcGD: $this->load->model("\x44\162\x6f\160\144\x6f\x77\x6e\x5f\x6d\x6f\144\145\154", "\x64\162\157\x70\x64\157\x77\156"); goto T96_1; T96_1: $this->form_validation->set_error_delimiters('', ''); goto YjOj0; pFqlb: $this->load->model("\103\142\164\x5f\155\x6f\x64\145\x6c", "\x63\142\x74"); goto OxcGD; enyl_: if ($this->ion_auth->is_admin()) { goto NuTuC; } goto Z3A0X; HDvbz: if (!$this->ion_auth->logged_in()) { goto iiLy9; } goto enyl_; YjOj0: } public function output_json($data, $encode = true) { goto G2X5N; G2X5N: if (!$encode) { goto SRPnh; } goto fqdn7; MZffh: SRPnh: goto h6HCE; h6HCE: $this->output->set_content_type("\x61\x70\x70\x6c\151\x63\141\164\151\x6f\156\57\x6a\x73\x6f\156")->set_output($data); goto H41RN; fqdn7: $data = json_encode($data); goto MZffh; H41RN: } public function index() { goto dwjzp; FspcI: $setting = $this->dashboard->getSetting(); goto EAFMP; SW1dZ: foreach ($id_jenis as $jenis) { array_push($ids, $jenis->id_jenis); ErRec: } goto NLckK; XCWsB: $data["\x74\x70\137\141\x63\x74\x69\166\x65"] = $tp; goto JiObM; Wv88q: mesXO: goto Wh0gh; pSCd7: cTr5W: goto tNGZX; xBViB: if (!($jenis_selected != null)) { goto M1pYT; } goto Bf0E0; BOJda: $data["\162\x75\141\x6e\x67\163"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, []); goto vT1Vh; vT1Vh: $data["\160\x65\x6e\147\x61\x77\x61\x73"] = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt); goto stY5c; Vlj_T: $jenis_selected = $this->input->get("\152\145\156\x69\163", true); goto d3kgT; JiKlI: goto JTBdn; goto ijnye; cS4zL: $data["\162\x75\x61\x6e\x67\137\x73\145\163\151"] = $this->cbt->getRuangSesi($tp->id_tp, $smt->id_smt); goto BOJda; dR4Yt: $tglJadwals = []; goto xBViB; IFH5t: $tp = $this->dashboard->getTahunActive(); goto KeMcV; CSQVF: if (!(count($id_jenis) > 0)) { goto cTr5W; } goto SW1dZ; Bf0E0: $tglJadwals = $this->cbt->getAllJadwalByJenis($jenis_selected, $tp->id_tp, $smt->id_smt); goto dBFoI; jJrtT: $data["\x72\165\x61\156\x67"] = $this->dropdown->getAllRuang(); goto MBZvZ; dSfjw: $data["\x74\x67\154\137\x6a\x61\144\167\x61\x6c\163"] = $tglJadwals; goto jJrtT; dBFoI: foreach ($tglJadwals as $tgl => $jadwalss) { goto Vhq7i; Bl0kh: tVzz4: goto P1IX5; Vhq7i: foreach ($jadwalss as $mpl => $jadwals) { goto TokIb; BZYfr: tmUJV: goto B7Hcf; TokIb: foreach ($jadwals as $jadwal) { goto LTN47; xMs6M: eQgeN: goto Mjl13; tbjfX: foreach ($jadwal->bank_kelas as $kb) { goto fAITi; yErfR: VxDCy: goto f63W5; zDV0K: lO4dR: goto yErfR; MztIZ: $jadwal->peserta[] = $klss; goto zDV0K; fAITi: if (!($kb["\x6b\x65\154\141\163\x5f\151\x64"] != '')) { goto lO4dR; } goto X7_c1; X7_c1: $klss = $this->cbt->getKelasUjian($kb["\x6b\145\154\141\163\137\151\144"]); goto MztIZ; f63W5: } goto xMs6M; Mjl13: lXuJP: goto OVDs7; LTN47: $jadwal->bank_kelas = unserialize($jadwal->bank_kelas ?? ''); goto tbjfX; OVDs7: } goto Z5sLQ; Z5sLQ: bNQ2e: goto BZYfr; B7Hcf: } goto Rh_1F; Rh_1F: fyNaW: goto Bl0kh; P1IX5: } goto Wv88q; gFqPa: $data["\153\145\x6c\x61\x73"] = $kelass; goto kZ8xJ; kZ8xJ: $data["\160\x72\157\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto MByjm; NOyDG: $this->load->view("\137\164\x65\155\x70\154\x61\x74\x65\x73\x2f\x64\141\163\x68\x62\157\141\x72\144\x2f\x5f\146\157\157\x74\145\162"); goto s0vRh; d3kgT: $data["\x6a\x65\156\151\163\x5f\163\145\x6c\145\x63\164\x65\144"] = $jenis_selected; goto dR4Yt; CYMkP: $id_jenis = $this->cbt->getDistinctJenisJadwal($tp->id_tp, $smt->id_smt); goto ZE6Yp; opL33: JTBdn: goto Vlj_T; OT54m: $kelass = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto gFqPa; EAFMP: $data = ["\x75\x73\x65\162" => $user, "\x6a\x75\144\x75\x6c" => "\101\164\165\162\x20\120\145\156\x67\x61\167\x61\163", "\x73\x75\142\x6a\x75\144\x75\154" => "\x50\x65\156\147\141\167\x61\x73\40\x55\x6a\151\141\156\x2f\x55\154\141\x6e\x67\141\156", "\163\145\164\164\x69\x6e\x67" => $setting]; goto IFH5t; Wh0gh: M1pYT: goto dSfjw; ZiEpe: $this->load->view("\143\x62\x74\x2f\160\145\x6e\147\x61\x77\x61\x73\57\x64\141\164\141"); goto NOyDG; MByjm: $data["\147\165\x72\165\163"] = $this->dropdown->getAllGuru(); goto CYMkP; ZE6Yp: $ids = []; goto CSQVF; NLckK: Lch4P: goto pSCd7; stY5c: $this->load->view("\x5f\164\x65\155\160\154\141\x74\145\x73\x2f\144\141\163\x68\142\x6f\x61\162\x64\57\x5f\150\145\x61\x64\x65\x72", $data); goto ZiEpe; ijnye: zicgA: goto FejAm; dwjzp: $user = $this->ion_auth->user()->row(); goto FspcI; KeMcV: $smt = $this->dashboard->getSemesterActive(); goto GTPI2; dR7dr: $data["\163\155\x74\137\x61\143\164\x69\166\x65"] = $smt; goto OT54m; tNGZX: if (count($ids) > 0) { goto zicgA; } goto s5anN; JiObM: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto dR7dr; s5anN: $data["\152\145\156\151\x73"] = ['' => "\x62\145\x6c\165\155\x20\x61\144\141\x20\x6a\x61\x64\x77\141\x6c\40\x75\x6a\x69\141\x6e"]; goto JiKlI; MBZvZ: $data["\x73\145\x73\151"] = $this->dropdown->getAllSesi(); goto cS4zL; GTPI2: $data["\164\160"] = $this->dashboard->getTahun(); goto XCWsB; FejAm: $data["\152\145\156\151\163"] = $this->cbt->getAllJenisUjianByArrJenis($ids); goto opL33; s0vRh: } public function savePengawas() { goto VhmpJ; Fizf5: $tp = $this->dashboard->getTahunActive(); goto GmeAn; GmeAn: $smt = $this->dashboard->getSemesterActive(); goto Uqn32; DCadU: oreL3: goto I5rG3; GKguU: $data["\x73\164\141\x74\x75\163"] = $updated; goto rn7As; XGrJD: $updated = 0; goto x18hs; x18hs: foreach ($input as $d) { goto LV5Ll; OCIUx: BVHSG: goto UqEyX; gyfW1: $id_pengawas = $id_tp . $id_smt . $jadwal . $ruang . $sesi; goto fsfjt; hfnw0: $update = $this->db->replace("\x63\142\164\x5f\160\145\156\x67\x61\167\141\x73", $dataInsert); goto lGviP; fsfjt: $dataInsert = ["\151\x64\x5f\160\x65\x6e\x67\x61\x77\x61\x73" => $id_pengawas, "\151\144\137\x6a\x61\144\x77\141\154" => $jadwal, "\x69\x64\137\x74\x70" => $id_tp, "\151\144\137\x73\x6d\x74" => $id_smt, "\151\144\137\x72\165\x61\x6e\147" => $ruang, "\151\144\137\x73\x65\163\151" => $sesi, "\151\144\x5f\x67\165\x72\x75" => implode("\54", $d->guru)]; goto hfnw0; S1OvD: $jadwal = $d->jadwal; goto gyfW1; lGviP: if (!$update) { goto S_J0y; } goto oZ6dP; cY1Wu: S_J0y: goto OCIUx; G8dzC: $sesi = $d->sesi; goto S1OvD; oZ6dP: $updated++; goto cY1Wu; LV5Ll: $ruang = $d->ruang; goto G8dzC; UqEyX: } goto DCadU; VhmpJ: $input = json_decode($this->input->post("\144\x61\x74\141", true)); goto Fizf5; TdZa1: $id_smt = $smt->id_smt; goto XGrJD; Uqn32: $id_tp = $tp->id_tp; goto TdZa1; rn7As: $this->output_json($data); goto Qc7j2; I5rG3: $data["\x65\162\162\x6f\162"] = "\x2d\x2d"; goto GKguU; Qc7j2: } }
