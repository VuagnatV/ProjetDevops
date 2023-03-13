
Vagrant.configure("2") do |config|

  config.vm.box = "hashicorp/bionic64"
  config.vm.hostname = "vagrant.test"
  config.ssh.insert_key = false

  config.vm.provider "vmware_desktop" do |v|
    v.base_mac = "00:0c:29:ac:f3:50"
    v.base_address = "192.168.80.122"
  end

  # Pour l'utilisation de vagrant et ansible

  #config.vm.provision "ansible" do |ansible|
   # ansible.verbose = "v"
    #ansible.playbook = "playbook.yml"
  #end
  
end
