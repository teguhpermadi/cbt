<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\123\105\x50\x41\124\x48") or exit("\x4e\157\40\144\x69\162\x65\143\164\x20\163\x63\162\151\160\164\x20\x61\x63\143\x65\163\x73\x20\141\154\154\x6f\167\x65\144"); class Settings_model extends CI_Model { public function not_admin() { goto NtLRk; ZULMl: $this->db->from("\165\x73\145\162\x73\40\x61"); goto SaIaY; ZfiGW: return $this->db->get()->result(); goto yY0p1; SaIaY: $this->db->join("\x75\163\145\162\x73\x5f\x67\x72\157\165\160\x73\x20\142", "\x61\x2e\x69\x64\x3d\x62\56\165\163\x65\x72\x5f\151\x64"); goto hiAF3; NtLRk: $this->db->select("\x61\x2e\151\x64"); goto ZULMl; hiAF3: $this->db->where_not_in("\x62\56\x67\x72\x6f\x75\x70\137\x69\x64", ["\61"]); goto ZfiGW; yY0p1: } public function truncate($table) { goto Hx2mn; V1t7h: $this->db->query("\123\105\124\x20\106\x4f\122\105\x49\107\x4e\137\113\x45\131\137\103\110\105\x43\113\123\40\75\40\60"); goto HmU62; JUFxL: return; goto SRWpv; Hx2mn: $this->load->helper("\x66\x69\154\145"); goto V1t7h; HmU62: foreach ($table as $tb) { $this->db->truncate($tb); tm0cc: } goto yAMjm; yAMjm: dCh6T: goto jjaA8; MiXT1: cfagJ: goto JUFxL; qOYFq: $users = $this->not_admin(); goto GDJRh; jjaA8: $this->db->query("\x53\105\124\x20\106\x4f\122\105\111\x47\x4e\x5f\x4b\x45\131\137\x43\x48\x45\103\113\123\x20\75\40\61"); goto arrwp; arrwp: delete_files("\x2e\57\x75\x70\154\x6f\141\x64\x73\x2f\142\x61\x6e\153\137\x73\157\x61\x6c\57"); goto qOYFq; GDJRh: foreach ($users as $user) { $this->db->delete("\x75\163\x65\162\x73", array("\151\144" => $user->id)); OuizZ: } goto MiXT1; SRWpv: } public function getSetting() { return $this->db->get("\163\x65\164\164\x69\156\147")->row(); } function toJSON($table) { $query = $this->db->get($table); return json_encode($query->result(), JSON_PRETTY_PRINT); } function rowSize($table) { $query = $this->db->get($table); return $query->num_rows(); } }
