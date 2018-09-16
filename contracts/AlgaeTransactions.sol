pragma solidity ^0.4.18;

contract Transactions{
    struct transactionDetails{
        uint amount;
        address other;
        string typeOfTrans;
    }

    mapping(address=>transactionDetails[]) users;

    modifier hasHistory(){
        require(users[msg.sender].length > 0);
        _;
    }

    function histLength() view hasHistory public returns(uint len){
        return users[msg.sender].length;
    }

    function getHistory(uint index) view hasHistory public returns(uint amount, address other, string typeOfTrans){
        return (users[msg.sender][index].amount, users[msg.sender][index].other, users[msg.sender][index].typeOfTrans);
    }
    
    function addHistory(uint _amount, address _other, string _typeOfTrans) public returns(bool success){
        users[msg.sender].push(transactionDetails(_amount, _other, _typeOfTrans));
        return true;
    }
}
