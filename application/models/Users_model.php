<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\x53\105\x50\x41\124\x48") or exit("\x4e\x6f\x20\144\x69\162\145\143\164\x20\x73\x63\x72\x69\x70\x74\x20\x61\x63\143\x65\163\163\40\141\x6c\154\x6f\167\145\144"); class Users_model extends CI_Model { public function getDatausers($id = null) { goto WEVma; kdcWY: $this->datatables->select("\x75\x73\x65\162\163\56\x69\x64\x2c\x20\165\163\145\162\x6e\141\155\x65\x2c\40\146\x69\162\163\x74\x5f\x6e\141\x6d\x65\54\40\x6c\x61\163\x74\x5f\x6e\141\155\x65\x2c\40\x65\x6d\x61\151\154\x2c\x20\x46\x52\117\x4d\x5f\125\x4e\111\x58\124\111\x4d\105\x28\x63\162\145\x61\164\145\x64\x5f\157\156\51\x20\x61\x73\40\x63\162\x65\141\x74\145\x64\137\157\x6e\x2c\x20\154\141\x73\x74\137\154\x6f\x67\151\156\54\40\x61\143\x74\151\166\145\x2c\40\x67\162\157\x75\x70\163\56\x6e\x61\x6d\145\x20\x61\163\x20\154\x65\166\x65\154"); goto gTUhB; WEVma: $this->db->query("\x53\105\124\x20\123\121\114\x5f\x42\111\107\137\123\105\x4c\x45\x43\124\x53\x3d\61"); goto kdcWY; An9WL: AZtHE: goto Mzoyt; QL5YI: $this->datatables->join("\147\162\x6f\165\x70\163", "\x75\163\x65\162\x73\137\147\162\x6f\x75\x70\x73\56\147\162\x6f\x75\x70\137\x69\x64\x3d\x67\162\157\x75\160\163\56\x69\144"); goto p_qsT; p_qsT: if (!($id !== null)) { goto AZtHE; } goto ay0Jx; Mzoyt: return $this->datatables->generate(); goto RDO7v; lXE17: $this->datatables->join("\x75\x73\x65\162\163", "\165\x73\x65\162\163\x5f\x67\x72\x6f\x75\160\x73\56\165\x73\x65\x72\x5f\151\144\x3d\165\x73\145\162\x73\x2e\x69\x64"); goto QL5YI; ay0Jx: $this->datatables->where("\165\163\145\162\163\x2e\x69\144\x20\41\x3d", $id); goto An9WL; gTUhB: $this->datatables->from("\165\163\145\162\163\x5f\x67\162\x6f\x75\x70\x73"); goto lXE17; RDO7v: } public function getLevelGuru() { $query = $this->db->get("\154\145\166\145\154\137\147\165\162\165")->result(); return $query; } public function getDataadmin() { goto gAPYz; bT81z: $this->datatables->from("\165\163\x65\162\163\137\x67\x72\157\165\x70\x73"); goto BSLDu; yJGCB: $this->datatables->join("\x67\162\157\x75\160\163", "\x75\163\x65\162\x73\137\x67\162\157\x75\x70\163\56\x67\x72\x6f\x75\x70\x5f\151\144\x3d\x67\162\157\x75\160\163\56\151\x64"); goto tjiIv; gAPYz: $this->db->query("\x53\x45\x54\x20\123\121\114\x5f\102\111\x47\137\123\x45\x4c\105\103\124\x53\x3d\61"); goto CxSs0; BSLDu: $this->datatables->join("\x75\x73\x65\162\x73", "\165\x73\x65\162\163\137\147\x72\x6f\165\160\x73\x2e\165\163\x65\162\137\151\144\x3d\x75\163\145\x72\x73\x2e\151\x64"); goto yJGCB; tjiIv: $this->datatables->where("\147\162\157\x75\160\137\x69\x64\x20\75", 1); goto wu3jm; CxSs0: $this->datatables->select("\165\x73\145\x72\163\x2e\151\x64\54\x20\x75\163\145\x72\x6e\141\x6d\x65\x2c\40\146\x69\162\x73\164\137\x6e\141\x6d\x65\54\x20\x6c\x61\163\x74\x5f\156\x61\x6d\145\54\x20\145\x6d\x61\151\x6c\54\40\x46\x52\x4f\115\137\125\x4e\x49\130\x54\x49\x4d\x45\x28\x63\162\145\141\x74\x65\144\x5f\x6f\156\x29\x20\x61\163\x20\x63\162\x65\x61\x74\145\x64\x5f\157\x6e\54\40\154\x61\163\164\x5f\154\x6f\147\x69\156\x2c\x20\x61\x63\x74\x69\x76\145\x2c\40\x67\x72\x6f\165\x70\163\56\x6e\x61\155\x65\40\141\163\40\154\x65\x76\145\154"); goto bT81z; wu3jm: return $this->datatables->generate(); goto lwzE0; lwzE0: } public function getUserGuru($tp, $smt) { goto WeD2u; qS2oi: $this->datatables->join("\154\x65\x76\x65\154\137\x67\165\162\x75\40\x63", "\x62\56\151\x64\x5f\152\x61\142\141\x74\x61\156\75\143\x2e\151\144\137\154\x65\166\x65\154", "\154\145\146\x74"); goto Hdxkc; WeD2u: $this->db->query("\123\x45\x54\40\x53\121\114\x5f\102\111\x47\137\123\x45\x4c\105\103\x54\123\75\x31"); goto eIufD; Jo3Eb: return $this->datatables->generate(); goto LEMrx; eIufD: $this->datatables->select("\141\56\151\144\x5f\x67\165\162\x75\x2c\x20\141\x2e\156\141\155\141\x5f\147\165\x72\x75\x2c\x20\141\x2e\x75\x73\145\162\x6e\141\155\145\x2c\x20\x61\x2e\160\x61\x73\x73\167\x6f\162\x64\x2c\x20\x63\x2e\154\145\166\145\154\54\40\145\56\x69\144\x2c\x20\50\x53\105\x4c\x45\x43\x54\40\x43\x4f\x55\x4e\124\50\x69\144\51\x20\x46\x52\x4f\115\40\165\163\x65\162\163\x20\x57\x48\x45\122\105\40\145\56\x75\x73\x65\162\156\x61\155\x65\40\x3d\x20\x61\x2e\165\163\145\x72\x6e\141\155\145\x29\x20\101\x53\40\141\x6b\x74\x69\x66"); goto qCYVK; Hdxkc: $this->datatables->join("\165\x73\x65\x72\x73\x20\145", "\x61\x2e\165\x73\145\x72\156\x61\x6d\145\75\x65\56\165\163\145\x72\x6e\141\x6d\x65", "\154\145\x66\164"); goto Jo3Eb; JDW65: $this->datatables->join("\x6a\x61\x62\x61\164\141\156\137\x67\165\x72\165\40\x62", "\141\x2e\151\x64\137\x67\x75\x72\x75\x3d\142\56\x69\x64\137\x67\165\162\x75\x20\x41\116\104\40\x62\56\151\144\x5f\x74\x70\75" . $tp . "\x20\101\116\x44\40\x62\56\151\144\x5f\163\x6d\164\x3d" . $smt . '', "\154\x65\x66\164"); goto qS2oi; qCYVK: $this->datatables->from("\x6d\141\163\x74\145\162\137\147\x75\162\x75\40\141"); goto JDW65; LEMrx: } public function getDataGuru($id) { goto I8nmF; I8nmF: $this->db->select("\x2a"); goto Fs37b; q6xQh: $query = $this->db->get()->row(); goto Jnihw; X_PLO: $this->db->where("\151\144\x5f\x67\x75\162\x75", $id); goto q6xQh; Jnihw: return $query; goto F7Bjh; Fs37b: $this->db->from("\x6d\x61\163\x74\x65\162\x5f\x67\x75\162\x75"); goto X_PLO; F7Bjh: } public function getDetailGuru($id) { goto cclz6; jfqS4: $this->db->join("\154\x65\166\x65\x6c\x5f\x67\x75\x72\x75\40\143", "\142\56\x69\144\x5f\x6a\141\x62\141\x74\x61\156\x3d\143\x2e\151\144\137\154\x65\x76\145\x6c", "\x6c\x65\146\164"); goto duJwo; tkTbk: $this->db->from("\x6d\141\x73\164\x65\x72\137\x67\x75\162\165\40\141"); goto g1XIv; Vu1S4: $this->db->where("\141\x2e\x69\x64\x5f\x67\165\162\165", $id); goto nhD6z; sMQdG: $this->db->select("\141\56\x69\x64\x5f\147\x75\x72\x75\54\x20\x61\56\x6e\x61\155\141\137\147\165\x72\x75\54\x20\x61\x2e\165\x73\145\x72\156\x61\155\145\54\40\x61\56\160\141\x73\x73\167\x6f\x72\x64\54\40\x61\x2e\x65\x6d\x61\151\154\54\x20\x63\x2e\x6c\145\166\x65\x6c\54\x20\x65\56\x69\144\x2c\40\50\x53\x45\114\105\x43\124\40\x43\x4f\x55\x4e\x54\x28\151\x64\51\x20\106\122\117\x4d\40\165\163\145\162\163\40\127\110\105\122\105\40\145\x2e\x75\163\145\x72\156\x61\155\145\x20\75\x20\141\x2e\165\163\x65\x72\x6e\141\155\x65\x29\40\x41\x53\x20\141\x6b\x74\151\x66"); goto tkTbk; nhD6z: $query = $this->db->get()->row(); goto JbqEV; JbqEV: return $query; goto q9I1V; duJwo: $this->db->join("\x75\163\145\162\x73\x20\145", "\x61\x2e\x75\163\145\162\x6e\x61\155\145\x3d\145\56\x75\163\145\162\156\141\x6d\145", "\x6c\x65\x66\164"); goto Vu1S4; g1XIv: $this->db->join("\x6a\141\142\x61\164\141\156\x5f\x67\x75\x72\165\40\x62", "\141\56\x69\x64\137\x67\165\x72\165\75\x62\56\151\144\137\147\165\162\x75", "\x6c\145\x66\x74"); goto jfqS4; cclz6: $this->db->query("\123\105\124\x20\x53\121\x4c\x5f\x42\x49\107\137\123\105\114\x45\103\124\123\75\61"); goto sMQdG; q9I1V: } public function getGuruByUsername($username) { goto bLrCM; bLrCM: $this->db->where("\165\163\x65\162\x6e\141\155\145", $username); goto hc5xp; yffp2: return $query; goto g24_N; hc5xp: $query = $this->db->get("\x6d\x61\x73\x74\145\162\137\147\x75\x72\165")->row(); goto yffp2; g24_N: } public function getUsers($username) { goto O_PPv; eKESC: return $query; goto AAf1s; t1rQA: $query = $this->db->get("\x75\163\x65\x72\x73")->row(); goto eKESC; O_PPv: $this->db->where("\x75\163\145\x72\156\141\155\145", $username); goto t1rQA; AAf1s: } public function getGroupSiswa() { goto K3jKF; oJ5jq: $query = $this->db->get()->result(); goto sP0zs; uBv0p: $this->db->from("\x75\x73\145\162\163\x5f\147\x72\157\x75\160\163\40\x61"); goto HhqfB; HhqfB: $this->db->join("\x75\163\145\x72\x73\40\x62", "\x61\x2e\165\163\145\162\137\151\x64\75\142\x2e\x69\144", "\154\145\x66\164"); goto azBX6; azBX6: $this->db->where("\x67\x72\157\165\x70\x5f\x69\144", 3); goto oJ5jq; sP0zs: return $query; goto Uec0N; K3jKF: $this->db->select("\52"); goto uBv0p; Uec0N: } public function getKelas($tp, $smt) { goto YvE5P; YvE5P: $this->db->where("\x69\144\x5f\x74\x70", $tp); goto ax8n3; N3iCi: return $query; goto nppu_; DsupP: $query = $this->db->get("\155\x61\x73\x74\x65\x72\137\x6b\145\154\x61\x73")->result(); goto N3iCi; ax8n3: $this->db->where("\x69\x64\137\163\x6d\x74", $smt); goto DsupP; nppu_: } public function getMapel() { $query = $this->db->get("\x6d\141\x73\x74\x65\162\137\155\141\x70\145\154")->result(); return $query; } public function getUserSiswa($tp, $smt) { goto TEASe; hpmc7: $this->datatables->join("\153\x65\x6c\x61\x73\x5f\x73\151\x73\167\141\40\x62", "\142\x2e\151\144\137\163\x69\163\167\141\x3d\141\x2e\151\144\137\x73\x69\163\x77\x61\x20\101\116\104\x20\x62\56\x69\144\x5f\x74\x70\75" . $tp . "\40\x41\x4e\104\x20\x62\56\x69\144\x5f\163\x6d\x74\75" . $smt . '', "\154\x65\146\x74"); goto Rf6Nx; TEASe: $this->db->query("\x53\x45\x54\40\123\x51\x4c\137\x42\x49\107\137\x53\x45\114\105\103\x54\x53\75\x31"); goto da_SW; Rf6Nx: $this->datatables->join("\x6d\x61\163\x74\x65\x72\137\x6b\145\x6c\141\x73\40\x63", "\x63\56\151\144\x5f\x6b\145\x6c\x61\x73\75\142\56\x69\x64\137\x6b\x65\x6c\141\x73", "\x6c\x65\146\x74"); goto zxpEy; K9kAH: $this->datatables->from("\x6d\x61\x73\164\x65\162\137\x73\151\163\167\141\40\141"); goto hpmc7; da_SW: $this->datatables->select("\141\x2e\x69\144\x5f\163\x69\x73\167\141\54\x20\x61\x2e\156\x69\163\54\x2e\x61\56\156\141\155\141\x2c\x20\141\x2e\x75\163\x65\162\x6e\141\x6d\145\x2c\x20\141\x2e\x70\141\163\x73\167\x6f\x72\x64\54\x20\x63\x2e\x6e\x61\155\141\137\153\145\154\141\163\x2c\40\144\x2e\x69\x64\x2c\x20\50\123\105\x4c\105\x43\x54\x20\103\x4f\x55\116\124\x28\151\144\51\40\106\122\117\115\40\165\163\x65\162\x73\x20\x57\x48\x45\122\x45\40\144\56\x75\x73\145\162\156\x61\155\x65\x20\75\x20\141\x2e\165\x73\x65\x72\156\x61\155\145\x29\x20\101\x53\40\x61\x6b\x74\x69\146"); goto K9kAH; ub89q: return $this->datatables->generate(); goto yvrlm; zxpEy: $this->datatables->join("\165\x73\x65\x72\163\40\x64", "\x64\56\165\x73\145\162\x6e\141\155\145\75\141\56\x75\163\x65\162\156\141\x6d\x65", "\154\145\146\164"); goto ub89q; yvrlm: } public function getDataSiswa($id) { goto vToVY; VJ1Yd: $this->db->where("\x69\144\x5f\x73\x69\163\167\x61", $id); goto z_67v; vToVY: $this->db->select("\156\x69\163\x2c\x20\156\x69\163\x6e\x2c\40\156\x61\x6d\141\x2c\40\165\x73\145\162\x6e\x61\x6d\145\x2c\x20\160\141\163\x73\167\157\x72\x64"); goto RvzTK; z_67v: $query = $this->db->get()->row(); goto b2SeQ; b2SeQ: return $query; goto X3e3c; RvzTK: $this->db->from("\155\x61\163\164\x65\162\137\163\151\x73\x77\141"); goto VJ1Yd; X3e3c: } public function getSiswaAktif() { goto yCPqI; cY0Qp: return $this->db->get("\155\x61\x73\x74\x65\x72\137\x73\151\x73\x77\141\x20\x61")->result(); goto YWvaz; rMP02: $this->db->join("\x75\x73\x65\x72\163\x20\x63", "\141\x2e\165\x73\x65\162\156\x61\155\x65\x3d\x63\x2e\165\x73\x65\162\x6e\x61\x6d\145", "\154\145\146\164"); goto cY0Qp; yCPqI: $this->db->select("\x61\x2e\151\144\x5f\163\151\163\x77\x61\54\x20\x63\x2e\151\x64\54\40\50\x53\105\x4c\105\103\x54\x20\x43\117\x55\116\x54\x28\x69\144\x29\x20\106\122\x4f\x4d\x20\x75\163\145\162\163\40\127\110\105\x52\105\x20\x75\x73\x65\162\x73\56\165\x73\x65\x72\156\141\155\x65\x20\75\x20\x61\56\x75\x73\x65\162\156\x61\155\x65\x29\40\101\123\x20\141\153\x74\151\146"); goto rMP02; YWvaz: } public function getGuruAktif() { goto VvWSS; dhfqY: return $this->db->get("\x6d\x61\163\164\x65\x72\x5f\147\x75\162\x75\x20\141")->result(); goto hShy6; VvWSS: $this->db->select("\x61\56\x69\144\137\x67\x75\x72\165\x2c\x20\143\x2e\x69\x64\x2c\x20\x28\123\x45\114\x45\x43\x54\x20\x43\x4f\125\116\x54\x28\x69\144\51\40\106\x52\x4f\115\40\x75\163\x65\x72\163\40\x57\x48\x45\122\x45\x20\x75\x73\145\x72\x73\x2e\165\x73\145\x72\x6e\141\x6d\x65\40\x3d\x20\141\56\x75\163\145\x72\x6e\x61\155\145\51\40\101\123\40\141\153\x74\x69\x66"); goto m7qk1; m7qk1: $this->db->join("\x75\163\145\x72\x73\40\x63", "\x61\56\165\x73\x65\162\156\141\155\x65\x3d\x63\56\x75\x73\x65\162\156\141\x6d\145", "\154\145\x66\x74"); goto dhfqY; hShy6: } }
